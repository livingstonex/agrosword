<template>
    <div>
        <div class="card-body pb-1">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="input-group mb-3">
                <div class="input-group-prepend pointer" v-on:click="decreaseStock">
                  <span class="input-group-text">-</span>
                </div>
                <input type="text" class="form-control" placeholder="Number of stock" v-model="stock" readonly>
                <div class="input-group-append pointer" v-on:click="increaseStock">
                  <span class="input-group-text">+</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body pt-3">
            <div class="upload-benefits">
                <h6><strong>Order Summary</strong></h6>
                <p>
                    <i class="fa fa-check-circle text-success mr-2"></i>
                    <strong>Number of Stocks:</strong> {{ stock }}
                </p>
                <p>
                    <i class="fa fa-check-circle text-success mr-2"></i>
                    <strong>Amount:</strong> ₦ {{ totalAmount }}
                </p>
            </div>
        </div>

        <div class="card-body pt-1">
          <form method="POST" :action="action" accept-charset="UTF-8">
              <!-- @csrf -->
              <input type="hidden" name="email" v-model="email">
              <input type="hidden" name="_token" v-model="token">
              <input type="hidden" name="amount" v-model="sentTotalAmount">
              <input type="hidden" name="reference" v-model="reference">
              <input type="hidden" name="metadata" :value="JSON.stringify(meta)">
              <input type="hidden" name="callback_url" v-model="callback">
              <button class="btn btn-primary btn-block shadow text-white" type="submit">
                  Pay ₦ {{ totalAmount }}
              </button>
          </form>
        </div>
    </div>
</template>

<script>
    export default {
        props:['amount', 'email', 'reference', 'callback', 'reference', 'action', 'id'],
        data() {
            return {
                stock: 1,
                token: _token,
            }
        },
        methods: {
            decreaseStock() {
              if (this.stock == 1) return;
              if (this.stock < 1) {
                this.stock = 1;
                return;
              };
              this.stock = this.stock - 1;
            },

            increaseStock() {
              this.stock = this.stock + 1;
            },
        },
        computed: {
            totalAmount () {
                return this.amount * this.stock;
            },
            sentTotalAmount () {
                return this.amount * this.stock * 100;
            },
            meta () {
              return {
                  stock: this.stock,
                  projectid: this.id
              }
            }
        }
    }
</script>
