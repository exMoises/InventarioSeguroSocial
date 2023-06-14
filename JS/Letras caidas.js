//texto animado de letras caídas
class TextoAnimado{
    constructor(id, objetivo){
        this.texto = document.getElementById(id);
        this.objetivo = document.getElementById(objetivo);
        this.letras = this.texto.innerText.split(``);
        this.texto.innerText = ``;
        this.letras.forEach((letra)=>{
            let caracter = letra === `` ? `&nbsp;`: letra;
            this.texto.innerHTML = this.texto.innerHTML + `
            <div>
            <span>${caracter}</span>
            <span class="segunda-linea">${caracter}</span>
            </div>
            `;
        });

        this.texto.addEventListener(`mouseenter`, () => {
            let cuenta = 0;
            const intervalo = setInterval( () => {
                if(cuenta < this.texto.children.length){
                    this.texto.children[cuenta].classList.add(`animacion`);
                    cuenta+=1;
                }else{
                    clearInterval(intervalo);
                }
            }, 30);
        });

        this.texto.addEventListener(`mouseleave`, () => {
            let cuenta = 0;
            const intervalo = setInterval( () => {
                if(cuenta < this.texto.children.length){
                    this.texto.children[cuenta].classList.remove(`animacion`);
                    cuenta+=1;
                }else{
                    clearInterval(intervalo);
                }
            }, 30);
        });
            }
}

new TextoAnimado('dep1');
new TextoAnimado('dep2');
new TextoAnimado('dep3');
new TextoAnimado('dep4');
new TextoAnimado('dep5');