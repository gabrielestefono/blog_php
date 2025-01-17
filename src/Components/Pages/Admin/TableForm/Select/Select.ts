import Choices from "choices.js";

export class Select {
  /**
   * O elemento select.
   * @private
   */
  private readonly _selectElement: HTMLSelectElement | undefined;

  /**
   * Cria uma instância de Select.
   * @param name O id do elemento select
   */
  constructor(name: string) {
    const changeThemeButton = document.getElementById(name);
    if (changeThemeButton && changeThemeButton instanceof HTMLSelectElement) {
      this._selectElement = changeThemeButton;
      this.initialize();
    }
  }

  /**
   * Inicializa o componente.
   */
  public initialize(): Choices {
    return new Choices(this._selectElement, {
      removeItemButton: true,
      renderChoiceLimit: -1,
      searchEnabled: false,
      searchChoices: false,
      classNames: {
        containerOuter: ["choices"],
        containerInner: ["choices__inner"],
        input: ["choices__input"],
        inputCloned: ["choices__input--cloned"],
        list: ["choices__list"],
        listItems: ["choices__list--multiple"],
        listSingle: ["choices__list--single"],
        listDropdown: ["choices__list--dropdown"],
        item: ["choices__item"],
        itemSelectable: ["choices__item--selectable"],
        itemDisabled: ["choices__item--disabled"],
        itemChoice: ["choices__item--choice"],
        description: ["choices__description"],
        placeholder: ["choices__placeholder"],
        group: ["choices__group"],
        groupHeading: ["choices__heading"],
        button: ["choices__button"],
        activeState: ["is-active"],
        focusState: ["is-focused"],
        openState: ["is-open"],
        disabledState: ["is-disabled"],
        highlightedState: ["is-highlighted"],
        selectedState: ["is-selected"],
        flippedState: ["is-flipped"],
        loadingState: ["is-loading"],
        notice: ["choices__notice"],
        addChoice: ["choices__item--selectable", "add-choice"],
        noResults: ["has-no-results"],
        noChoices: ["has-no-choices"],
      },
    });
  }
}
