<footer class="site-footer">
    <div class="text-center">
        2014 - Alvarez.is
        <a href="index" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?= ASSETS; ?>eshop/admin/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?= ASSETS; ?>eshop/admin/js/jquery.dcjqaccordion.2.7.js">
</script>
<script src="<?= ASSETS; ?>eshop/admin/js/jquery.scrollTo.min.js"></script>
<script src="<?= ASSETS; ?>eshop/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="<?= ASSETS; ?>eshop/admin/js/jquery.sparkline.js"></script>


<!--common script for all pages-->
<script src="<?= ASSETS; ?>eshop/admin/js/common-scripts.js"></script>

<script type="text/javascript" src="<?= ASSETS; ?>eshop/admin/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="<?= ASSETS; ?>eshop/admin/js/gritter-conf.js"></script>

<!--script for this page-->
<script src="<?= ASSETS; ?>eshop/admin/js/sparkline-chart.js"></script>
<script src="<?= ASSETS; ?>eshop/admin/js/zabuto_calendar.js"></script>

<script type="application/javascript">
    $(document).ready(function() {
        $("#date-popover").popover({
            html: true,
            trigger: "manual"
        });
        $("#date-popover").hide();
        $("#date-popover").click(function(e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [{
                type: "text",
                label: "Special event",
                badge: "00"
            },
                {
                    type: "block",
                    label: "Regular event",
                }
            ]
        });
        // Delete Product
        $(".delete-btn").click(function () {
            const id = $(this).data("id");
            $.ajax({
                method: "post",
                url: '<?=ROOT?>categories/delete',
                data: {id: id},
                success: function (data) {
                    if(data) {
                        window.location.href = "<?=ROOT?>categories";
                    }
                }
            })
        })
    });


    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>


</body>

</html>