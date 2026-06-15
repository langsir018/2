async function dapatkanData() {
  const status = document.getElementById("status");
  const senaraiPengguna = document.getElementById("senaraiPengguna");

  status.innerHTML = "Sedang mendapatkan data...";
  status.className = "";
  senaraiPengguna.innerHTML = "";

  try {
    const response = await fetch("https://jsonplaceholder.typicode.com/users");

    if (!response.ok) {
      throw new Error("Masalah sambungan API");
    }

    const data = await response.json();

    // Sahkan struktur data dalam console
    console.log(data);

    status.innerHTML = "Data berjaya diperoleh.";
    status.className = "success";

    data.forEach((user) => {
      senaraiPengguna.innerHTML += `
                <div class="user-card">
                    <h3>${user.name}</h3>
                    <p><strong>E-mel:</strong> ${user.email}</p>
                </div>
            `;
    });
  } catch (error) {
    console.log(error);

    status.innerHTML = "Ralat: Gagal mendapatkan data daripada API.";
    status.className = "error";
  }
}
