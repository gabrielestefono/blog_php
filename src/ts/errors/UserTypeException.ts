/**
 * Erro customizado para o tipo de usuário
 * @class UserTypeException
 * @extends {Error}
 * @param {string} message Mensagem de erro
 * @param {number} statusCode Código de status HTTP
 * @example
 * throw new UserTypeException("Não foi possível identificar o tipo de usuário", 500);
 */
export class UserTypeException extends Error {
  public statusCode: number;

  constructor(message: string, statusCode: number) {
    super(message);

    this.name = this.constructor.name;

    this.statusCode = statusCode;
  }
}
