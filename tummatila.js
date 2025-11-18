const button = document.getElementById("tummatilanappi");
const html = document.documentElement;

let theme;

const setTheme = (value) => {
    if (value === "dark") {
        html.classList.add("tummatila");
        button.textContent = "Vaalea tila";
    } else {
        if (typeof pelottava !== 'undefined') {
            //pelottavaa koodia
            const link = document.getElementById("themeStylesheet");
            if (link) {
                link.href = "kauhutyyli.css";
            }   
            //
        }
        else {
            html.classList.remove("tummatila");
            button.textContent = "Tumma tila";
        }
    }

    theme = value;
    localStorage.setItem("theme", value);
};

const loadTheme = () => {
    const saved = localStorage.getItem("theme");

    if (saved) {
        setTheme(saved);
    } else {
        setTheme("light");
        localStorage.setItem("theme", "light");
    }
};

button.addEventListener("click", () => {
    if (theme === "dark") {
        setTheme("light");
    } else {
        setTheme("dark");
    }
});

loadTheme();
