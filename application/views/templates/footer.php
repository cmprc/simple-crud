                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="p-t-40">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2019 rfcamp.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    <script src="https://use.fontawesome.com/43bd779987.js"></script>

    <!-- Jquery JS-->
    <script src="<?= base_url() ?>assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url() ?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= base_url() ?>assets/vendor/slick/slick.min.js">
    </script>
    <script src="<?= base_url() ?>assets/vendor/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/animsition/animsition.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= base_url() ?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= base_url() ?>assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url() ?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?= base_url() ?>assets/js/main.js"></script>

    <script>
        $(document).ready(function(){   
            $('select').each(function(){
                if($(this).data('value') != undefined)
                    $(this).val($(this).data('value'));
            });
            $(".js-select2").trigger('change');
        });
    </script>

</body>

</html>
<!-- end document-->