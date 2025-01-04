export class Header {
    /**
     * O botão que muda o tema da página.
     * @private
     */
    private readonly _changeThemeButton: HTMLButtonElement | undefined;

    /**
     * Cria uma instância de Header.
     */
    constructor() {
        const changeThemeButton = document.getElementById("change-theme");
        if (changeThemeButton && changeThemeButton instanceof HTMLButtonElement) {
            this._changeThemeButton = changeThemeButton;
            this._initialize();
        }
    }

    /**
     * Inicializa o componente.
     */
    private _initialize(): void {
        this._changeThemeButton!.addEventListener("click", () => this._changeTheme());
    }

    /**
     * Altera o tema da página.
     * @private
     */
    private _changeTheme(): void {
        const buttonClass = this._changeThemeButton!.className;
        if(buttonClass === 'light'){
            this._changeThemeButton!.className = 'dark';
            return;
        }
        this._changeThemeButton!.className = 'light';
    }
}