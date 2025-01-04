import { SwalConfirm } from "../../../../../ts/components/SwalConfirm";

export class TableData {
  private readonly _buttonListElement: HTMLButtonElement[];

  constructor() {
    const deleteButton = document.querySelectorAll(".delete-button");
    this._buttonListElement = Array.from(deleteButton) as HTMLButtonElement[];
    if (this._buttonListElement.length > 0) {
      this._initialize();
    }
  }

  private _initialize(): void {
    this._buttonListElement.forEach((button) => {
      button.addEventListener("click", () => {
        const id = parseInt(button.id.replace("button-delete-", ""));
        console.log("Clicou!", id);
        return new SwalConfirm(
          "Você tem certeza?",
          "Você não poderá reverter isso!",
          "Excluído!",
          "Sua postagem foi excluída."
        );
      });
    });
  }
}
