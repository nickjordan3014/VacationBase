function filterInit() {
    document.getElementById('filterBtn').onclick = function() {
        let filterToggle = document.getElementById('filter-toggle');
        filterToggle.classList.remove("filter-content");
        filterToggle.classList.add("filter-content-on");
    }
}

window.addEventListener("load", filterInit, false)