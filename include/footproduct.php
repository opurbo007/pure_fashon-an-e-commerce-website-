<footer class="footer">

<div class="storelogo">
    <a href="https://playstore.com" target="_"><img src="../img/logo/playstore.png"></a>
    <br>
    <a href="https://appstore.com" target="_"><img src="../img/logo/appstore.png"></a>
</div>

<div class="foot">
    <h5>Follow us on </h5>
    <ul>

        <a href="https://facebook.com" target="_"><i class="fab fa-facebook"></i></a>

        <a href="https://twitter.com" target="_"><i class="fab fa-twitter"></i></a>

        <a href="https://instagram.com" target="_"><i class="fab fa-instagram"></i></a>

        <a href="https://youtube.com" target="_"><i class="fab fa-youtube"></i></a>

        <a href="https://linkedin.com" target="_"><i class="fab fa-linkedin"></i></a>

        <a href="https://whatsapp.com" target="_"><i class="fab fa-whatsapp"></i></a>

    </ul>
    <hr>
    <span class="copy">
            All copyright reserved to &copy;Pure Fashion
        </span>
</div>

<div class="policy">
    <ul>
        <li><a href="../terms.php">Terms & Condition</a></li>
        <li><a href="../return.php">Return Policy</a></li>
        <li><a href="../affiliate.php">Affiliate Program</a></li>
        <li><a href="../contract.php">Contract us</a></li>

    </ul>

</div>

</footer>

<hr>

</body>
<script src="../js/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jStorage/0.4.12/jstorage.min.js"></script>
<script src="../js/main.js"></script>
<script type="application/javascript">
    $(document).ready(function() {
        $.Purefashion({
            debug: false,
            onItemAdded: function(item) {
                console.log(item);
            },
            onItemUpdated: function(item) {
                console.log(item);
            }
        });
    });
</script>


</html>