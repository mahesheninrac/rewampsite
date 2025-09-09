
function getBaseURL() {
  const pathparts = location.pathname.split("/");
  return location.host === "localhost"
    ? `${location.origin}/${pathparts[1].trim("/")}/`
    : `${location.origin}/`;
}

/********  Initialize Global URLs  **********/
const BASE = getBaseURL(); // Base URL of the current environment
const API_BASE = `${BASE}api/v1/`; // Base API endpoint

/******************  Fetch Data from API  *****************/
/**
 * Wrapper for fetch API to include JWT auth and error handling.
 * @param {string} url - The endpoint to call.
 * @param {object} options - Additional fetch options (method, headers, etc.).
 * @param {function} callback - Error callback handler.
 * @returns {Promise<object>} - JSON response if successful.
 */

const fetchData = async (url, options = {}, callback, json = true) => {
  let headers = {
    Authorization: `Bearer ${jwt}`,
    ...options.headers,
  };

  if (json) {
    headers["Content-Type"] = "application/json";
  }
  try {
    const res = await fetch(url, {
      headers: headers,
      ...options,
    });

    if (!res.ok) throw new Error(res.statusText);
    return await res.json();
  } catch (err) {
    callback(err);
  }
};

const showModel = (model) => {
  const modal = new bootstrap.Modal(document.querySelector(model), {
    keyboard: false,
  });
  modal.show();
};
const closeModel = (model) => {
  const modalElement = document.querySelector(model);
  const modalInstance = bootstrap.Modal.getInstance(modalElement); // get existing instance

  if (modalInstance) {
    modalInstance.hide(); // closes the modal
  }
};

function getParamsFromUrl(index = 0) {
  let url = window.location.href;
  let params_array = url.replace(BASE, "").split("/");
  return params_array[index];
}


document.addEventListener("DOMContentLoaded", function () {
    var lazyImages;
    if ("IntersectionObserver" in window) {
        lazyImages = document.querySelectorAll(".lazy");
        var imageObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var image = entry.target;
                    image.src = image.dataset.src;
                    image.classList.remove("lazy");
                    imageObserver.unobserve(image);
                }
            });
        });

        lazyImages.forEach(function (image) {
            imageObserver.observe(image);
        });
    } else {
        var lazyloadTimeout;
        lazyImages = document.querySelectorAll(".lazy");

        function lazyload() {
            if (lazyloadTimeout) {
                clearTimeout(lazyloadTimeout);
            }

            lazyloadTimeout = setTimeout(function () {
                var scrollTop = window.pageYOffset;
                lazyImages.forEach(function (img) {
                    if (img.offsetTop < (window.innerHeight + scrollTop)) {
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                    }
                });
                if (lazyloadImages.length == 0) {
                    document.removeEventListener("scroll", lazyload);
                }
            }, 30);
        }

        document.addEventListener("scroll", lazyload);
    }
})
