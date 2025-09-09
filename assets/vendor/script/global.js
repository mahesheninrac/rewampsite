/*
*********************************************************************
                     Global Function Start
*********************************************************************
This file contains global utility functions and variables 
used throughout the application for common tasks like 
fetching data, handling URLs, showing toasts, and more.
*/

/*****************  Base URL Generator  *******************/
/**
 * Dynamically constructs the base URL depending on environment (localhost or live).
 * @returns {string} - The base URL of the app.
 */

function getBaseURL() {
  const pathparts = location.pathname.split("/");
  return location.host === "localhost"
    ? `${location.origin}/${pathparts[1].trim("/")}/`
    : `${location.origin}/`;
}

/******************  Fetch Data from API  *****************/
/**
 * Wrapper for fetch API to include JWT auth and error handling.
 * @param {string} url - The endpoint to call.
 * @param {object} options - Additional fetch options (method, headers, etc.).
 * @param {function} callback - Error callback handler.
 * @returns {Promise<object>} - JSON response if successful.
 */
const fetchData = async (url, options = {}, json = true) => {
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

    if (!res.ok) {
      showToast("Error: " + res.description, "danger");
    }
    return await res.json();
  } catch (err) {
    showToast("Error: " + err, "danger");
  }
};

/*********************  Debounce Function  *********************/
/**
 * Debounces a function to limit how often it executes.
 * @param {function} fn - Function to debounce.
 * @param {number} delay - Delay time in milliseconds.
 * @returns {function} - Debounced version of the function.
 */
const debounce = (fn, delay = 50) => {
  let timeout;
  return (...args) => {
    clearTimeout(timeout);
    timeout = setTimeout(() => fn(...args), delay);
  };
};

/********  Get JWT Token from Local Storage  **********/
/**
 * Retrieves JWT token from local storage.
 */
const jwt = localStorage.getItem("jwt_token");
if (!jwt) {
  console.warn("JWT not found. Please login.");
}

/*****************  Toast Notification Handler  *****************/
/**
 * Displays a toast message using Bootstrap's toast component.
 * @param {string} message - Message to display.
 * @param {string} type - Bootstrap contextual type (primary, success, danger, etc.).
 * @param {number} duration - How long the toast stays visible (ms).
 */
const showToast = (
  message = "Something happened",
  type = "primary",
  duration = 3000
) => {
  const toastEl = document.getElementById("liveToast");
  if (!toastEl) {
    console.error("Toast element not found in the DOM.");
    return;
  }

  const toastBody = toastEl.querySelector(".toast-body");

  toastBody.innerHTML = message;
  toastEl.className = `toast align-items-center text-white bg-${type} border-0`;

  const toast = new bootstrap.Toast(toastEl, { delay: duration });
  toast.show();
};

/*****************  DOM Cleanup for Sidebar  *****************/
/**
 * Removes unwanted siblings next to the sidebar.
 */

removeSidebarSiblings = () => {
  const sideBarSelector = document.querySelector(".side-menu");
  if (sideBarSelector && sideBarSelector.nextSibling) {
    sideBarSelector.nextSibling.remove();
  }
};

/*
  ********************************************************************
                       Global Function Ends
  ********************************************************************
  */

/*
  ********************************************************************
                       Global Variables Start
  ********************************************************************
  */

/********  Initialize Global URLs  **********/
const BASE = getBaseURL(); // Base URL of the current environment
const API_BASE = `${BASE}api/v1`; // Base API endpoint
/*
  *********************************************
                       Global Variables Ends
  *********************************************
*/

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

const slugify = (str) => {
  str = str.replace(/^\s+|\s+$/g, "");
  str = str.toLowerCase();
  var from = "Ã Ã¡Ã¤Ã¢Ã¨Ã©Ã«ÃªÃ¬Ã­Ã®Ã³Ã¶Ã´Ã¹ÃºÃ¼Ã»Ã±Ã§Â·/_,:;";
  var to = "aaaaeeeeiiiioooouuuunc------";
  for (var i = 0, l = from.length; i < l; i++) {
    str = str.replace(new RegExp(from.charAt(i), "g"), to.charAt(i));
  }
  str = str
    .replace(/[^a-z0-9 -]/g, "")
    .replace(/\s+/g, "-")
    .replace(/-+/g, "-");
  return str;
};

const focusAtEnd = (el) => {
  const range = document.createRange();
  const sel = window.getSelection();
  range.selectNodeContents(el);
  range.collapse(false);
  sel.removeAllRanges();
  sel.addRange(range);
  el.focus();
};

let auth_form = document.querySelector(".authentication-form");
if (auth_form) {
  auth_form.addEventListener("submit", async function (e) {
    e.preventDefault();
    const errors = [];
    const emailPattern = /^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,}$/;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    if (username === "") errors.push("Email is required.");
    if (!emailPattern.test(username)) errors.push("Invalid email format.");
    if (password === "") errors.push("Password is required.");
    if (password.length < 3)
      errors.push("Password must be at least 3 characters long.");
    if (password.length > 30)
      errors.push("Password must not exceed 30 characters.");
    if (!/[A-Z]/.test(password))
      errors.push("Password must contain at least one uppercase letter.");
    if (!/[a-z]/.test(password))
      errors.push("Password must contain at least one lowercase letter.");
    if (!/[0-9]/.test(password))
      errors.push("Password must contain at least one number.");
    if (!/[!@#$%^&*(),.?":{}|<>]/.test(password))
      errors.push("Password must contain at least one special character.");

    if (errors.length > 0) {
      showToast(errors.map((x) => "<li>" + x + "</li>").join(""), "danger");
      return;
    }

    let url = auth_form.action;
    response = await fetch(url, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "X-Requested-With": "XMLHttpRequest",
      },
      body: JSON.stringify({
        username: username,
        password: password,
      }),
    }).catch((error) => {
      showToast("Error: " + error, "danger");
      return;
    });
    if (response.status !== 200) {
      showToast("username or password is incorrect", "danger");
      return;
    }
    result = await response.json();
    if (result.responseCode == 200 && result.responseStatus == true) {
      localStorage.setItem("jwt_token", result.responseData);
      showToast("Authentication Success: Redirecting...", "success");
      setTimeout(() => {
        location.reload();
      }, 2000);
    } else {
      showToast("username or password is incorrect", "danger");
    }
  });
}

window.addEventListener("DOMContentLoaded", () => {
  // Remove unwanted siblings next to the sidebar
  removeSidebarSiblings();
  const sideBarSelector = document.querySelector(".side-menu");
  if (sideBarSelector && sideBarSelector.nextSibling) {
    sideBarSelector.nextSibling.remove();
  }
});
