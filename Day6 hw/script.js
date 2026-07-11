const API = "https://jsonplaceholder.typicode.com/users";

const userContainer = document.getElementById("userContainer");
const loading = document.getElementById("loading");
const errorBox = document.getElementById("error");
const retryBtn = document.getElementById("retry");
const search = document.getElementById("search");
const sort = document.getElementById("sort");
const count = document.getElementById("count");

let users = [];

function fetchUsers() {

    loading.classList.remove("d-none");
    errorBox.classList.add("d-none");
    userContainer.innerHTML = "";

    fetch(API)

    .then(res => {

        if (!res.ok) {
            throw new Error("Failed");
        }

        return res.json();

    })

    .then(data => {

        users = data;

        
        users.splice(3);

        
        users[0].name = "Khushbu";
        users[0].email = "khushbu@gmail.com";
        users[0].phone = "+91 8387060001";
        users[0].company.name = "Student";
        users[0].address.city = "Jaipur";

    
        users[1].name = "Khushi";
        users[1].email = "khushi@gmail.com";
        users[1].phone = "+91 9876543211";
        users[1].company.name = "Student";
        users[1].address.city = "Jaipur";

        
        users[2].name = "Kratika";
        users[2].email = "kratika@gmail.com";
        users[2].phone = "+91 9876543212";
        users[2].company.name = "Student";
        users[2].address.city = "Jaipur";

        displayUsers(users);

        loading.classList.add("d-none");

    })

    .catch(err => {

        loading.classList.add("d-none");
        errorBox.classList.remove("d-none");

        console.error(err);

    });

}

function displayUsers(data) {

    userContainer.innerHTML = "";

    count.textContent = data.length;

    data.forEach(user => {

        userContainer.innerHTML += `
        <div class="col-lg-4 col-md-6 mb-4">

            <div class="card h-100">

                <div class="card-body text-center">

                    <div class="avatar">
                        ${user.name.charAt(0)}
                    </div>

                    <h4 class="mt-3">${user.name}</h4>

                    <p class="text-muted">${user.email}</p>

                    <p><strong>Phone:</strong> ${user.phone}</p>

                    <p><strong>Company:</strong> ${user.company.name}</p>

                    <p><strong>City:</strong> ${user.address.city}</p>

                </div>

            </div>

        </div>
        `;

    });

}

search.addEventListener("keyup", () => {

    let value = search.value.toLowerCase();

    let filtered = users.filter(user =>
        user.name.toLowerCase().includes(value)
    );

    sortUsers(filtered);

});

sort.addEventListener("change", () => {

    let value = search.value.toLowerCase();

    let filtered = users.filter(user =>
        user.name.toLowerCase().includes(value)
    );

    sortUsers(filtered);

});

function sortUsers(data) {

    if (sort.value === "asc") {

        data.sort((a, b) => a.name.localeCompare(b.name));

    } else {

        data.sort((a, b) => b.name.localeCompare(a.name));

    }

    displayUsers(data);

}

retryBtn.addEventListener("click", fetchUsers);

fetchUsers();