<div class="container-choice">
    <label for="<?php echo $name; ?>"><?php echo $label; ?></label>
    <select
        id="my-select"
        <?php echo $multiple ? 'multiple' : ''; ?>
        name="<?php echo $name; ?>"
        class="<?php echo (bool) $halfSize ? 'col-sm-6' : 'col-sm-12'; ?> background-red"
        >
        <?php foreach ($options as $option => $value) : ?>
            <option value="<?php echo $option; ?>"><?php echo $value; ?></option>
        <?php endforeach; ?>
    </select>
</div>

<style>
    body.admin .container-choice {
        width: 100%;
        box-sizing: content-box;
        padding: 7.5px;
    }

    body.admin .choices {
        width: 100%;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        background-color: #ffffff;
    }

    body.admin .choices__inner {
        background-color: transparent;
        border: none;
    }

    body.admin .choices__input {
        color: #fff;
        background-color: #ffffff;
        border: none;
    }

    body.admin .choices__list {
        background-color: #ffffff;
        border: none;
    }

    body.admin .choices__item{
        color: #495057;
    }

    body.admin .is-highlighted {
        background-color: #007bff !important;
        color: #ffffff;
    }

    body.admin .is-highlighted::after {
        color: #ffffff;
        opacity: 1 !important;
    }

    body.admin .has-no-choices {
        color: #495057;
        background-color: #ffffff;
        border: 1px solid #ced4da;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const element = document.getElementById('my-select');
        const choices = new Choices(element, {
            removeItemButton: true,
            renderChoiceLimit: -1,
            searchEnabled: false,
            searchChoices: false,
            classNames: {
                containerOuter: ['choices'],
                containerInner: ['choices__inner'],
                input: ['choices__input'],
                inputCloned: ['choices__input--cloned'],
                list: ['choices__list'],
                listItems: ['choices__list--multiple'],
                listSingle: ['choices__list--single'],
                listDropdown: ['choices__list--dropdown'],
                item: ['choices__item'],
                itemSelectable: ['choices__item--selectable'],
                itemDisabled: ['choices__item--disabled'],
                itemChoice: ['choices__item--choice'],
                description: ['choices__description'],
                placeholder: ['choices__placeholder'],
                group: ['choices__group'],
                groupHeading: ['choices__heading'],
                button: ['choices__button'],
                activeState: ['is-active'],
                focusState: ['is-focused'],
                openState: ['is-open'],
                disabledState: ['is-disabled'],
                highlightedState: ['is-highlighted'],
                selectedState: ['is-selected'],
                flippedState: ['is-flipped'],
                loadingState: ['is-loading'],
                notice: ['choices__notice'],
                addChoice: ['choices__item--selectable', 'add-choice'],
                noResults: ['has-no-results'],
                noChoices: ['has-no-choices'],
            },
        });
    });
</script>
