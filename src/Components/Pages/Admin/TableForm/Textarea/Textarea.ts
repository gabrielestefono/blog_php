import EasyMDE from "easymde";

export class Textarea {
  /**
   * Elemento textarea.
   * @private
   */
  private readonly _textareaElement: HTMLTextAreaElement | undefined;

  /**
   * Construtor.
   */
  constructor() {
    const textareaElement = document.getElementById("my-text-area");
    if (textareaElement) {
      this._textareaElement = textareaElement as HTMLTextAreaElement;
      this._initialize();
    }
  }

  /**
   * Inicializa o editor de texto.
   * @returns 
   */
  private _initialize(): EasyMDE {
    return new EasyMDE({
      element: this._textareaElement,
    });
  }
}
