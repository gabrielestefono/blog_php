import $ from 'jquery';

export class Navbar {

    private readonly _pushMenu: JQuery<HTMLElement> | undefined;

    constructor() {
        const pushMenu = $('#chat-pane-toggle');
        if (pushMenu) {
            this._pushMenu = pushMenu;
            this.initialize();
            return;
        }
        throw new Error('Botão não encontrado!');
    }

    public initialize(): void {
        (this._pushMenu as any).DirectChat('toggle');
        console.log(this._pushMenu)
    }

}