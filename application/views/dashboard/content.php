<section class="overview">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="overview-item-2 overview-item-2--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="text">
                                <h2><?= $tasks_num ?></h2>
                                <span>Tarefas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="overview-item-2 overview-item-2--c2">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="text">
                                <h2><?= $users_num ?></h2>
                                <span>Usuários</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="statistic-chart">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title-5 m-b-35">Estatísticas</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- TOP CAMPAIGN-->
                <div class="top-campaign">
                    <h3 class="title-3 m-b-30 text-center">Usuários</h3>
                    <div class="table-responsive">
                        <table class="table table-top-campaign">
                            <tbody>
                                <tr>
                                    <td>1. Australia</td>
                                    <td>$70,261.65</td>
                                </tr>
                                <tr>
                                    <td>2. United Kingdom</td>
                                    <td>$46,399.22</td>
                                </tr>
                                <tr>
                                    <td>3. Turkey</td>
                                    <td>$35,364.90</td>
                                </tr>
                                <tr>
                                    <td>4. Germany</td>
                                    <td>$20,366.96</td>
                                </tr>
                                <tr>
                                    <td>5. France</td>
                                    <td>$10,366.96</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END TOP CAMPAIGN-->
            </div>
            <div class="col">
                <!-- CHART PERCENT-->
                <div class="chart-percent-2">
                    <h3 class="title-3 m-b-30 text-center">Tarefas</h3>
                    <div class="chart-wrap">
                        <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                            <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                            </div>
                        </div>
                        <canvas id="tasks-chart" height="261" width="412" class="chartjs-render-monitor" style="display: block; height: 209px; width: 330px;" data-value="<?= $numbers ?>"></canvas>
                        <div id="chartjs-tooltip">
                            <table></table>
                        </div>
                    </div>
                    <div class="chart-info">
                        <div class="chart-note">
                            <span class="dot dot--blue"></span>
                            <span>Finalizadas</span>
                        </div>
                        <div class="chart-note">
                            <span class="dot dot--red"></span>
                            <span>Espera</span>
                        </div>
                        <div class="chart-note">
                            <span class="dot dot--green"></span>
                            <span>Desenvolvimento</span>
                        </div>
                    </div>
                </div>
                <!-- END CHART PERCENT-->
            </div>
        </div>
    </div>
</section>