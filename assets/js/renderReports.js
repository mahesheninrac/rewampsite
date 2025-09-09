// fetching data of reports

async function fetchReports() {
    const data = await fetch('http://192.168.1.155/ci/assets/js/reportData.json');

    return data.json();
}

function displayReport(report) {

    const reportCategory = document.getElementById(`content-${report.category}`);
    const newReport = document.createElement('div');
    newReport.innerHTML =
        `<div class="info-block d-flex flex py-1 gap-4 mx-4  align-items-start">
                <img src="${report.icon}" >

                <div class="text-content d-flex flex-column">
                  <p class="report-title">
                ${report.title}</p>
                  <p class="report-pointer">${report.pointers}</p>
                </div>
                <a href="${report.url}">Learn More <i class="icofont-long-arrow-right "></i></a>
              </div>`;

    // going for finding the children

    const N =reportCategory.children.length;
    // console.log(N);
    for (let i = 0; i <N; i++) {
        if(reportCategory.children[i].className===report.subcategory){
            reportCategory.children[i].appendChild(newReport)
        }
        
        
    }
    
}


fetchReports().then(data => {

    data.forEach(element => {
        displayReport(element);

    });


})







