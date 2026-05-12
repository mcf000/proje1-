document.addEventListener("DOMContentLoaded", function() {
    const darkModeBtn = document.getElementById("darkModeBtn");
    const body = document.body;

    // Kullanıcı daha önce Dark Mode seçmiş mi diye kontrol et (sayfa geçişlerinde karanlık kalması için)
    if (localStorage.getItem("theme") === "dark") {
        body.classList.add("dark-mode");
        if(darkModeBtn) darkModeBtn.innerText = "☀️ Aydınlık Mod";
    }

    // Butona tıklandığında temayı değiştir
    if(darkModeBtn) {
        darkModeBtn.addEventListener("click", function() {
            body.classList.toggle("dark-mode");
            
            if (body.classList.contains("dark-mode")) {
                localStorage.setItem("theme", "dark");
                darkModeBtn.innerText = "☀️ Aydınlık Mod";
            } else {
                localStorage.setItem("theme", "light");
                darkModeBtn.innerText = "🌙 Karanlık Mod";
            }
        });
    }
});