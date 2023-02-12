<template>
  <div>
    <b-container>
      <Header></Header>
    </b-container>
    <b-container>
      <CostDetail :uom="uom" :currency="currency" :chargeTo="chargeTo"></CostDetail>
    </b-container>
    <div class="footer">
      <button class="button-danger">Cancel</button>
      <button class="button-default">Save as Draft</button>
      <button class="button-primary">Submit</button>
    </div>
  </div>
</template>

<script>

import Header from '../components/Header.vue'
import CostDetail from '../components/CostDetail.vue'

export default {
  components: {
    Header,
    CostDetail
  },
  data() {
    return {
      uom: [],
      currency: [],
      chargeTo: []
    }
  },
  mounted() {
    this.getUom(),
    this.getCurrency(),
    this.getChargeTo()
  },
  methods: {
    getUom() {
      axios
        .get("/api/uom")
        .then(resp => {
          this.uom = resp.data.data;
        })
    },
    getCurrency() {
      axios
        .get("/api/currency")
        .then(resp => {
          this.currency = resp.data.data;
        })
    },
    getChargeTo() {
      axios
        .get("/api/charge-to")
        .then(resp => {
          this.chargeTo = resp.data.data;
        })
    }
  }
}
</script>

<style lang="scss" scoped>
  .footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 60px;   /* Height of the footer */
    background: rgb(244, 249, 251);
    text-align: right;
    padding-right: 80px;
    padding-top: 10px;
  }

  .button-danger {
    background-color: rgb(253, 43, 43);
    color: #FFF;
    border-radius: 3px;
    border: 1px solid rgb(253, 8, 8);
    font-size: 10pt;
    padding: 5px 10px;
  }

  .button-default {
    background-color: rgb(245, 242, 242);
    color: #000;
    border-radius: 3px;
    border: 1px solid rgb(218, 215, 215);
    font-size: 10pt;
    padding: 5px 10px;
  }

  .button-primary {
    background-color: rgb(6, 180, 116);
    color: #FFF;
    border-radius: 3px;
    border: 1px solid rgb(3, 138, 89);
    font-size: 10pt;
    padding: 5px 10px;
  }
</style>