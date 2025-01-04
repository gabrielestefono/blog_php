import Swal from "sweetalert2";

export class SwalConfirm {
  /**
   * Título do alerta
   * @private
   */
  private readonly _title: string;

  /**
   * Texto do alerta
   * @private
   */
  private readonly _text: string;

  /**
   * Título da confirmação
   * @private
   */
  private readonly _confirmTitle: string;

  /**
   * Mensagem de confirmação
   * @private
   */
  private readonly _confirmMessage: string;

  /**
   * @param title Título do alerta
   * @param text Texto do alerta
   * @param confirmTitle Título da confirmação
   * @param confirmMessage Mensagem de confirmação
   */
  constructor(
    title: string,
    text: string,
    confirmTitle: string,
    confirmMessage: string
  ) {
    this._title = title;
    this._text = text;
    this._confirmTitle = confirmTitle;
    this._confirmMessage = confirmMessage;
    this._initialize();
  }

  /**
   * Inicializa o alerta
   */
  private _initialize(): void {
    Swal.fire({
      title: this._title,
      text: this._text,
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Confirmar",
      cancelButtonText: "Cancelar",
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(this._confirmTitle, this._confirmMessage, "success");
      }
    });
  }
}
