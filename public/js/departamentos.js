let departmentsId = []; 
let url = "http://127.0.0.1:8000/departamentos"; 
const selectDepartment = document.getElementById("selectDepartment"); 
const selectCity = document.getElementById("selectCity"); 
const apiDepartment = () => { 
    destination = fetch(url) 
    .then((res) => res.json()) 
    .then((data) => { 
        console.log(data); 
        data.forEach((smallData) => { 
            selectDepartment.innerHTML += `<option value="${smallData.id}">${smallData.nombre}</option>`; 
        }); 
        }); 
    }  
         
apiDepartment(); 
selectDepartment.addEventListener("change", function updateDepartment() { 
    selectCity.innerHTML = ''; 
    idD = selectDepartment.value; 
    let cities = "" 
    fetch(url + '/' + idD) 
        .then((res) => res.json()) 
        .then((data) => { 
            data.forEach((smallData) => { 
                selectCity.innerHTML += `<option value="${smallData.id}">${smallData.nombre}</option>`; 
                console.log(smallData); 
            }); 
        }); 
}); 