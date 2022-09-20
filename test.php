            <!-- <?php foreach ($orders as $order) { ?>
                <h2 class="text-2xl font-semibold text-orange">Commande du <?= date('j/m/Y', strtotime($order->getOrder_date())) ?> </h2>
                <div class="flex space-x-16">
                    <ul class="">
                        <li class="font-bold text-xl">
                            <h2>Numéro de commande </h2>
                        </li>
                        <li class="">
                            <p><?= $order->getId() ?></p>
                        </li>
                    </ul>
                    <ul class="">
                        <li class="font-bold text-xl">
                            <h2> Total </h2>
                        </li>
                        <li class="">
                            <p><?= $order->getPayment_amount() ?>€</p>
                        </li>
                    </ul>
                    <ul class="">
                        <li class="font-bold text-xl">
                            <h2>Adresse de livraison </h2>
                        </li>
                        <li class="">
                            <p><?= $order->getDelivery_address() ?></p>
                        </li>
                    </ul>
                </div>
                <h3 class="font-bold text-xl">Contenu de la commande : </h3>
                <?php foreach ($orderproducts[$order->getId()] as $product) { ?>
                    <div class="flex space-x-10 bg-white p-5">
                        <img class=" h-[170px] w-[200px]" src="<?= $product["image"]; ?>" alt="<?= $product["name"]; ?>">
                        <div class="flex flex-col space-y-3">
                            <h3 class="text-2xl font-semibold"> <?= $product["name"]; ?></h3>
                            <h3 class="font-normal text-xl"><?= $product["dimensions"]; ?></h3>
                            <h3 class="text-xl"><?= number_format($product["price"], 2, ',', ' '); ?>€ TTC</h3>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?> -->