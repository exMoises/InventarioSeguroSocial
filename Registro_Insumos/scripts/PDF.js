
function generarPDF()
{
    if(ListaInsumos.length != 0)
    {
        const doc = new jsPDF();
        doc.text("Tabla de insumos", 10, 10);
        doc.autoTable ({
            html : ("#ListaDeInsumos")
        })
        doc.save("Solicitud.pdf"); // will save the file in the current working directory
    }
    else
    {
        alert("No se ha agregado ningún elemento en la lista");
    }
}