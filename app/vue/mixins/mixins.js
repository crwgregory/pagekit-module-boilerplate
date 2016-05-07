
module.exports = {
  methods: {

    convertLiteralToPercent: function(pct) {
      return Math.round(pct * 100);
    },

    /**
     * Lets you call the hand Vue currency converter filter as a function.
     * Shamefully stolen from vuejs
     * https://github.com/vuejs/vue/blob/a0624f4a47fe26bdf18198dbc1439e76ba08dc80/src/filters/index.js
     * @param value
     * @param currency
     * @param decimals
     * @returns {*}
     */
    convertToCurrency: function(value, currency, decimals) {
      value = parseFloat(value);
      if (!isFinite(value) || (!value && value !== 0)) return '';
      currency = currency != null ? currency : '$';
      decimals = decimals != null ? decimals : 2;
      var stringified = Math.abs(value).toFixed(decimals);
      var _int = decimals
        ? stringified.slice(0, -1 - decimals)
        : stringified;
      var i = _int.length % 3;
      var head = i > 0
        ? (_int.slice(0, i) + (_int.length > 3 ? ',' : ''))
        : '';
      var _float = decimals
        ? stringified.slice(-1 - decimals)
        : '';
      var sign = value < 0 ? '-' : '';
      return sign + currency + head +
        _int.slice(i).replace(digitsRE, '$1,') +
        _float;
    }
  }
};