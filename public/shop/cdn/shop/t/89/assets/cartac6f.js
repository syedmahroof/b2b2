/** Shopify CDN: Minification failed

Line 16:0 Transforming class syntax to the configured target environment ("es5") is not supported yet
Line 17:13 Transforming object literal extensions to the configured target environment ("es5") is not supported yet
Line 21:6 Transforming const to the configured target environment ("es5") is not supported yet
Line 22:6 Transforming const to the configured target environment ("es5") is not supported yet
Line 23:6 Transforming const to the configured target environment ("es5") is not supported yet
Line 31:0 Transforming class syntax to the configured target environment ("es5") is not supported yet
Line 32:13 Transforming object literal extensions to the configured target environment ("es5") is not supported yet
Line 47:10 Transforming object literal extensions to the configured target environment ("es5") is not supported yet
Line 48:4 Transforming const to the configured target environment ("es5") is not supported yet
Line 49:4 Transforming const to the configured target environment ("es5") is not supported yet
... and 16 more hidden warnings

**/
class CartRemoveButton extends HTMLElement {
  constructor() {
    super();
    this.addEventListener('click', (event) => {
      event.preventDefault();
      const isPersoProduct = this.dataset.pp !== undefined ? true : false;
      const isGiftProduct = this.dataset.gift !== undefined ? true : false;
      const date = this.dataset.date !== undefined ? this.dataset.date : '';
      this.closest('cart-items').updateQuantity(this.dataset.index, 0, isPersoProduct, date);
    });
  }
}

customElements.define('cart-remove-button', CartRemoveButton);

class CartItems extends HTMLElement {
  constructor() {
    super();

    this.lineItemStatusElement = document.getElementById('shopping-cart-line-item-status');

    this.currentItemCount = Array.from(this.querySelectorAll('[name="updates[]"]'))
      .reduce((total, quantityInput) => total + parseInt(quantityInput.value), 0);

    this.debouncedOnChange = debounce((event) => {
      this.onChange(event);
    }, 300);

    this.addEventListener('change', this.debouncedOnChange.bind(this));
  }

  onChange(event) {
    const isPersoProduct = event.target.dataset.pp !== undefined ? true : false;
    const isGiftProduct = event.target.dataset.gift !== undefined ? true : false;
    const date = event.target.dataset.date !== undefined ? event.target.dataset.date : '';
    this.updateQuantity(event.target.dataset.index, event.target.value, isPersoProduct, date, document.activeElement.getAttribute('name'), isGiftProduct);
  }

  getSectionsToRender() {
    return [
      {
        id: 'main-cart-items',
        section: document.getElementById('main-cart-items').dataset.id,
        selector: '.js-contents',
      },
      {
        id: 'cart-icon-bubble',
        section: 'cart-icon-bubble',
        selector: '.shopify-section'
      },
      {
        id: 'cart-live-region-text',
        section: 'cart-live-region-text',
        selector: '.shopify-section'
      },
      {
        id: 'main-cart-footer',
        section: document.getElementById('main-cart-footer').dataset.id,
        selector: '.js-contents-footer',
      }
    ];
  }

  async updateQuantity(line, quantity, isPersoProduct, date, name, isGiftProduct) {
    this.enableLoading(line);

    const body = JSON.stringify({
      line,
      quantity,
      sections: this.getSectionsToRender().map((section) => section.section),
      sections_url: window.location.pathname
    });

    await fetch(`${routes.cart_change_url}`, {...fetchConfig(), ...{ body }})
      .then((response) => {
        return response.text();
      })
      .then((state) => {
        const parsedState = JSON.parse(state);
        this.classList.toggle('is-empty', parsedState.item_count === 0);
        const cartFooter = document.getElementById('main-cart-footer');

        if (cartFooter) cartFooter.classList.toggle('is-empty', parsedState.item_count === 0);

        this.getSectionsToRender().forEach((section => {
          const elementToReplace =
            document.getElementById(section.id).querySelector(section.selector) || document.getElementById(section.id);
          elementToReplace.innerHTML =
            this.getSectionInnerHTML(parsedState.sections[section.section], section.selector);
        }));

        this.updateLiveRegions(line, parsedState.item_count);
        const lineItem =  document.getElementById(`CartItem-${line}`);
        if (lineItem && lineItem.querySelector(`[name="${name}"]`)) lineItem.querySelector(`[name="${name}"]`).focus();
        this.disableLoading();
        if(quantity == 0) {
          const personalisationOptions = document.querySelectorAll(`.o-cart__item--perso-option[data-date-property="${date}"]`)
          personalisationOptions.forEach((personalisationOption) => {
            personalisationOption.classList.add('visually-hidden')
          })
          const freeProducts = document.querySelectorAll(`.o-cart__item--free-item`)
          freeProducts.forEach((freeProduct) => {
            freeProduct.classList.add('visually-hidden')
          })
        }

        if(isPersoProduct && window.WhatSub && parseFloat(quantity) <= parseFloat(document.getElementById(`Quantity-${line}`).value)) {
          const data = {
            quantity,
            date,
            parsedState
          }

          window.WhatSub.dispatch('UPDATE_PERSO_CART', data);

        }
        setTimeout(() => {
        window.WhatSub.dispatch('UPDATE_CART');
      }, 1000);
      }).catch(() => {
        this.querySelectorAll('.loading-overlay').forEach((overlay) => overlay.classList.add('hidden'));
        document.getElementById('cart-errors').textContent = window.cartStrings.error;
        this.disableLoading();
      });
  }

  updateLiveRegions(line, itemCount) {
    if (this.currentItemCount === itemCount) {
      document.getElementById(`Line-item-error-${line}`)
        .querySelector('.cart-item__error-text')
        .innerHTML = window.cartStrings.quantityError.replace(
          '[quantity]',
          document.getElementById(`Quantity-${line}`).value
        );
    }

    this.currentItemCount = itemCount;
    this.lineItemStatusElement.setAttribute('aria-hidden', true);

    const cartStatus = document.getElementById('cart-live-region-text');
    cartStatus.setAttribute('aria-hidden', false);

    setTimeout(() => {
      cartStatus.setAttribute('aria-hidden', true);
      window.WhatSub.dispatch('UPDATE_CART');
    }, 1000);

  }

  getSectionInnerHTML(html, selector) {
    return new DOMParser()
    .parseFromString(html, 'text/html')
    .querySelector(selector) ? new DOMParser()
      .parseFromString(html, 'text/html')
      .querySelector(selector).innerHTML: '';
  }

  enableLoading(line) {
    document.getElementById('main-cart-items').classList.add('cart__items--disabled');
    this.querySelectorAll(`#CartItem-${line} .loading-overlay`).forEach((overlay) => overlay.classList.remove('hidden'));
    document.activeElement.blur();
    this.lineItemStatusElement.setAttribute('aria-hidden', false);
  }

  disableLoading() {
    document.getElementById('main-cart-items').classList.remove('cart__items--disabled');
  }
}

customElements.define('cart-items', CartItems);
