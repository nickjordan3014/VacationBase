function pdfInit() {
    document.getElementById('saveAsPDF').onclick = function () {
        console.log("help me please :(")
        let makepdf = document.getElementById("saveToPDF");
        let mywindow = window.open("", "PRINT");
        mywindow.document.write("<head><link rel='stylesheet' href='https://students.gaim.ucf.edu/~ni387624/VacationBase/style/main.css'></head>")
        mywindow.document.write(makepdf.innerHTML);
        mywindow.document.close();
        mywindow.focus();
        mywindow.print();
    }
};

window.addEventListener('load', pdfInit, false);