export class Header {
    private readonly _changeThemeButton: HTMLButtonElement;

    constructor() {
        const changeThemeButton = document.getElementById("change-theme");
        if (changeThemeButton instanceof HTMLButtonElement) {
            this._changeThemeButton = changeThemeButton;
            this.initialize();
            return;
        }
        throw new Error('Botão não encontrado!');
    }

    public initialize(): void {
        this._changeThemeButton.addEventListener("click", () => this._changeTheme());
    }

    private _changeTheme(): void {
        const buttonClass = this._changeThemeButton.className;
        if(buttonClass === 'light'){
            this._changeThemeButton.className = 'dark';
            return;
        }
        this._changeThemeButton.className = 'light';
    }
}