<template>
    <div class="wrapper">
        <b-row>
            <b-col>
                <span class="title">Cost Detail <b-icon-chevron-down></b-icon-chevron-down></span>                
            </b-col>
        </b-row>
        <b-row>
            <b-col>
                <table class="table table-stripped mt-4">
                    <thead>
                        <tr>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>UOM</th>
                            <th>Unit Price</th>
                            <th>Discount (%)</th>
                            <th>VAT (%)</th>
                            <th>Currency</th>
                            <th>VAT Amount</th>
                            <th>Sub Total</th>
                            <th>Total</th>
                            <th>Charge To</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-1">
                                <input type="text" class="form-input" placeholder="Description" style="width: 150px" />
                            </td>
                            <td class="p-1">
                                <input type="text" class="form-input" placeholder="Qty" style="width: 50px" />
                            </td>
                            <td class="p-1">
                                <select class="form-input" style="width: 50px">
                                    <option v-for="u in uom" value="u">{{ u }}</option>
                                </select>
                            </td>
                            <td class="p-1">
                                <input type="text" class="form-input" placeholder="Unit Price" style="width: 80px" />
                            </td>
                            <td class="p-1">
                                <input type="text" class="form-input" placeholder="Discount (%)" value="0" style="width: 80px" />
                            </td>
                            <td class="p-1">
                                <input type="text" class="form-input" placeholder="VAT (%)" value="0" style="width: 60px" />
                                <b-icon icon="arrow-right-short" scale="2" font-scale="1.2"></b-icon>
                            </td>
                            <td class="p-1">
                                <select class="form-input" style="width: 50px">
                                    <option v-for="c in currency" value="c">{{ c }}</option>
                                </select>
                            </td>
                            <td align="right" class="p-1">
                                <span>0.00</span>
                            </td>
                            <td class="p-1" align="right">
                                <span>0.00</span>
                            </td>
                            <td class="p-1" align="center" width="100px">
                                <span>0.00</span>
                            </td>
                            <td class="p-1" align="right">
                                <select class="form-input" style="width: 150px" placeholder="Select an option">
                                    <option v-for="c in chargeTo" value="c">{{ c }}</option>
                                </select>
                                <button class="btn-minus">-</button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" rowspan="2">
                                Exchange Rate 1 USD = 
                                <input class="form-input" value="2980" style="width: 70px; text-align: right;"/>  AED
                            </td>
                            <td class="summary-column">
                                AED in Total
                            </td>
                            <td align="right" class="p-1 summary-column">
                                <span>0.00</span>
                            </td>
                            <td class="p-1 summary-column" align="right">
                                <span>0.00</span>
                            </td>
                            <td class="p-1 summary-column" align="center" width="100px">
                                <span>0.00</span>
                            </td>
                            <td class="p-1" align="right" rowspan="2">
                                <button class="btn-add">+</button>
                            </td>
                        </tr>
                        <tr>
                            <td class="summary-column">
                                USD in Total
                            </td>
                            <td align="right" class="p-1 summary-column">
                                <span>0.00</span>
                            </td>
                            <td class="p-1 summary-column" align="right">
                                <span>0.00</span>
                            </td>
                            <td class="p-1 summary-column" align="center" width="100px">
                                <span>0.00</span>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </b-col>
        </b-row>
    </div>
</template>
<script>
export default {
    props: [
        'uom',
        'currency',
        'chargeTo'
    ]
}
</script>
<style lang="scss" scoped>

    $base-color: rgb(6, 180, 116);

    .wrapper {
        padding: 1em;

        .title {
            font-weight: 600;
            color: $base-color;
        }

        .table {
            font-size: 9pt;

            & > thead {
                background: #eeeaea;
            }

            & > th {
                text-align: center;
            }

            .form-input {
                background: rgb(241, 241, 241);
                border: 1px solid rgb(218, 215, 215);
                border-radius: 3px;
                padding: 4px;
                width: auto;
            }

            .form-input:hover,
            .form-input:focus {
                outline: 1px solid grey;
            }

            .btn-minus {
                border: 1px solid rgb(218, 215, 215);
                padding: 4px 10px;
                border-radius: 3px;
            }

            .btn-add {
                border: 1px solid rgb(218, 215, 215);
                padding: 4px 10px;
                border-radius: 3px;
                background-color: $base-color;
                color: #FFF;
            }

            .summary-column {
                background-color: rgb(241, 241, 241);
                font-weight: 500;
            }
        }
    }
</style>