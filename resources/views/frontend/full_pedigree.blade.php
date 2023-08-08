@extends('frontend.layouts.app')
@section('styles')
<link rel="stylesheet" href="{{asset('frontend/css/pedigree.css')}}" />
<style>
    .full-pedigree ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .full-pedigree li {
        list-style: none;
    }

    #extended_pedigree_container .generation.pedigree_gen4 .animalBox {
        float: left;
    }

</style>
@endsection
@section('title','Full Pedigree')
@section('content')
<div class="page-content">
    @include('frontend.components.inner-header',['bg_img'=>asset('frontend/images/background/header-bg.jpg'),'breedcrumb'=>'Full
    Pedigree','page_title'=>'Full Pedigree'])
    <!-- contact area -->
    <div class="wpb_wrapper">
        <div class="row-fluid">
            <div class="col-sm-12">
                <h1 class="main-heading">Pedigree:
                    <span class="pull-right" style="font-size: 14px; margin-top: 3px;">
                        <!--
<a class="open-modal button-1 button green" href="https://www.gsdcp.org/db/cat/view_pedigree/12116-ada-vom-asien">View Full Pedigree</a>-->
                    </span>
                </h1>
            </div>
        </div>
        <div class="row-fluid">
            <div class="col-sm-12">

                <div class="overflow" style="width: 100%;  overflow: auto">
                    <div id="extended_pedigree_container">
                        <div class="generation_depth">
                            <span>I Parents
                                <hr class="style-two-green"></span><span>II Grand Parents
                                <hr class="style-two-green"></span><span>III G.Grand Parents
                                <hr class="style-two-green"></span>
                            <span>IV G.G.Grand Parents
                                <hr class="style-two-green"></span>
                            <span>V G.G.G.Grand Parents
                                <hr class="style-two-green"></span>
                        </div>

                        <div class="pedigree_line">

                            <div class="generation pedigree_gen1">

                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="273">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/boss-sarracenia">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/1bcc6-boss_sarracenia_open.jpg"
                                                     alt="Boss Sarracenia">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/boss-sarracenia">Boss Sarracenia</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                            <li>
                                                <p class="one-liner">JR 703842 Lab</p>
                                            </li>
                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="288">
                                        <div>
                                            <a target="_blank"
                                               href="../../../cats-page-3/candy-kisses-by-united-colors-at-supreme-labrador">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/90d01-79d28-42566736_2210055832605501_5096405217021263872_n.jpg"
                                                     alt="Candy Kisses By United Colors at Supreme Labrador">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/candy-kisses-by-united-colors-at-supreme-labrador">Candy
                                                    Kisses By United Colors at Supreme Labrador</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                            <li>
                                                <p class="one-liner">PK 00042</p>
                                            </li>
                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>
                            </div>
                            <div class="generation pedigree_gen2">

                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="274">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/devonshires-london-edition">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/870f1-eddie-m.jpg"
                                                     alt="Devonshires London Edition">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/devonshires-london-edition">Devonshires
                                                    London Edition</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                            <li>
                                                <p class="one-liner">KCSB 3683CY</p>
                                            </li>
                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="275">
                                        <div>
                                            <a target="_blank"
                                               href="../../../cats-page-3/annie-sarracenia-majestic-chameleon">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/84581-nusia-m.jpg"
                                                     alt="Annie Sarracenia Majestic Chameleon">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/annie-sarracenia-majestic-chameleon">Annie
                                                    Sarracenia Majestic Chameleon</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                            <li>
                                                <p class="one-liner">PKR VIII-26148</p>
                                            </li>
                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="289">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/lynwater-ballantines">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Lynwater Ballantines">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/lynwater-ballantines">Lynwater
                                                    Ballantines</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                            <li>
                                                <p class="one-liner">JR 74065 Lab</p>
                                            </li>
                                            <li>
                                                <p class="one-liner">14-12-2014</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="290">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/aria-lab-united-colors">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Aria Lab United Colors">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/aria-lab-united-colors">Aria Lab United
                                                    Colors</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                            <li>
                                                <p class="one-liner">JR 700893 Lab</p>
                                            </li>
                                            <li>
                                                <p class="one-liner">02-07-2010</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>
                            </div>
                            <div class="generation pedigree_gen3">

                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="276">
                                        <div>
                                            <a target="_blank"
                                               href="../../../cats-page-3/devonshires-limited-edition-wc">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/ad8ff-devonshireslimitededition-m.jpg"
                                                     alt="Devonshires Limited Edition WC">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/devonshires-limited-edition-wc">Devonshires
                                                    Limited Edition WC</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                            <li>
                                                <p class="one-liner">AKCSR37321401</p>
                                            </li>
                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="277">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/devonshires-darjeeling">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/85641-devonshiresdarjeeling-m.jpg"
                                                     alt="Devonshires Darjeeling">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/devonshires-darjeeling">Devonshires
                                                    Darjeeling</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                            <li>
                                                <p class="one-liner">AKCSR34031901</p>
                                            </li>
                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="278">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/buttonwood-mcintosh">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/59a1a-mcintosh-mm.jpg"
                                                     alt="Buttonwood Mcintosh">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/buttonwood-mcintosh">Buttonwood
                                                    Mcintosh</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                            <li>
                                                <p class="one-liner">AKCSR45165902</p>
                                            </li>
                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="279">
                                        <div>
                                            <a target="_blank"
                                               href="../../../cats-page-3/wennie-malmesbury-sable-blues">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/7d68a-1awenie-m8.jpg"
                                                     alt="Wennie Malmesbury Sable Blues">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/wennie-malmesbury-sable-blues">Wennie
                                                    Malmesbury Sable Blues</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                            <li>
                                                <p class="one-liner">CLPLR23178</p>
                                            </li>
                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="291">
                                        <div>
                                            <a target="_blank"
                                               href="../../../cats-page-3/jw-ramsayvile-route-sixty-six">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="JW Ramsayvile Route Sixty Six">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/jw-ramsayvile-route-sixty-six">JW
                                                    Ramsayvile Route Sixty Six</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                            <li>
                                                <p class="one-liner">2467CN</p>
                                            </li>
                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="292">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/lynwater-irish-cream">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Lynwater Irish Cream">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/lynwater-irish-cream">Lynwater Irish
                                                    Cream</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                            <li>
                                                <p class="one-liner">AA00820304</p>
                                            </li>
                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="293">
                                        <div>
                                            <a target="_blank"
                                               href="../../../cats-page-3/hairs-tribute-kjetil-andre-aamodt">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Hair's Tribute Kjetil Andre Aamodt">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/hairs-tribute-kjetil-andre-aamodt">Hair's
                                                    Tribute Kjetil Andre Aamodt</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                            <li>
                                                <p class="one-liner">JR 78756 Lab</p>
                                            </li>
                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="294">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/dona">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Dona">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/dona">Dona</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                            <li>
                                                <p class="one-liner">JR 84345 Lab</p>
                                            </li>
                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>
                            </div>
                            <div class="generation pedigree_gen4">

                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="280">
                                        <div>
                                            <a target="_blank"
                                               href="../../../cats-page-3/timberland-woodsman-at-lor-al">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/70a4b-woodyinatlantaframed-m.jpg"
                                                     alt="Timberland Woodsman At Lor-Al">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/timberland-woodsman-at-lor-al">Timberland
                                                    Woodsman At Lor-Al</a></li>

                                            <li>
                                                <p class="one-liner">AKCSR05776302</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="281">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/devonshire-abbey-lane">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/a5351-devonshire_abbey_lane.jpg"
                                                     alt="Devonshire Abbey Lane">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/devonshire-abbey-lane">Devonshire Abbey
                                                    Lane</a></li>

                                            <li>
                                                <p class="one-liner">AKCSR05243502</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="282">
                                        <div>
                                            <a target="_blank"
                                               href="../../../cats-page-3/lobuff-bobwhite-at-chucklebrook">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/54429-lobuff_bobwhite_at_chucklebrook.jpg"
                                                     alt="Lobuff Bobwhite At Chucklebrook">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/lobuff-bobwhite-at-chucklebrook">Lobuff
                                                    Bobwhite At Chucklebrook</a></li>

                                            <li>
                                                <p class="one-liner">AKCSN91419803</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="283">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/devonshires-jasmine">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Devonshires Jasmine">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/devonshires-jasmine">Devonshires
                                                    Jasmine</a></li>

                                            <li>
                                                <p class="one-liner">AKCSR11275005</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="284">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/beechcrofts-study-in-black">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/5aebb-1abeechcroft-sstudyinblack.jpg"
                                                     alt="Beechcroft's Study In Black">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/beechcrofts-study-in-black">Beechcroft's
                                                    Study In Black</a></li>

                                            <li>
                                                <p class="one-liner">AKCSNA5561402</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="285">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/buttonwood-fox-hill-ivy">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/a35da-1afoxhilive.jpg"
                                                     alt="Buttonwood Fox Hill Ivy">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/buttonwood-fox-hill-ivy">Buttonwood Fox
                                                    Hill Ivy</a></li>

                                            <li>
                                                <p class="one-liner">AKCSN90021004</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="286">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/tapeatom-choir-master">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/af560-1amaser.jpg"
                                                     alt="Tapeatom Choir Master">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/tapeatom-choir-master">Tapeatom Choir
                                                    Master</a></li>

                                            <li>
                                                <p class="one-liner">CLPLP2075608</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="287">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/domenika-sable-blues">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/af7c2-1adomenika1-1-.jpg"
                                                     alt="Domenika Sable Blues">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/domenika-sable-blues">Domenika Sable
                                                    Blues</a></li>

                                            <li>
                                                <p class="one-liner">CLPLR1952608</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="295">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/poolstead-pleased-as-punch">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Poolstead Pleased As Punch">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/poolstead-pleased-as-punch">Poolstead
                                                    Pleased As Punch</a></li>

                                            <li>
                                                <p class="one-liner">2486CL</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="296">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/ramsayviie-rosaline">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Ramsayviie Rosaline">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/ramsayviie-rosaline">Ramsayviie
                                                    Rosaline</a></li>

                                            <li>
                                                <p class="one-liner">JR 3060CL</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="297">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/crickkecreek-cruising-along">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Crickkecreek Cruising Along">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/crickkecreek-cruising-along">Crickkecreek
                                                    Cruising Along</a></li>

                                            <li>
                                                <p class="one-liner">0616CJ</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="298">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/lynwater-anthem">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Lynwater Anthem">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/lynwater-anthem">Lynwater Anthem</a></li>

                                            <li>
                                                <p class="one-liner">W4744309W04</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="299">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/winnies-wing-and-a-prayer">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Winnie's Wing And A Prayer">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/winnies-wing-and-a-prayer">Winnie's Wing
                                                    And A Prayer</a></li>

                                            <li>
                                                <p class="one-liner">SKK 198822/04</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1136">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/winnes-barbeque">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Winne's Barbeque">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/winnes-barbeque">Winne's Barbeque</a>
                                            </li>

                                            <li>
                                                <p class="one-liner">NHSB 2375758</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="301">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/bendzamin">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Bendzamin">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/bendzamin">Bendzamin</a></li>

                                            <li>
                                                <p class="one-liner">JR 82746 Lab</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="302">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/sara">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Sara">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/sara">Sara</a></li>

                                            <li>
                                                <p class="one-liner">JR 83157 Lab</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>
                            </div>
                            <div class="generation pedigree_gen5">

                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="8071">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/no-information">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="No Information">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/no-information">No Information</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="8072">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/no-information">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="No Information">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/no-information">No Information</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="8071">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/no-information">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="No Information">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/no-information">No Information</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="8072">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/no-information">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="No Information">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/no-information">No Information</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="8071">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/no-information">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="No Information">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/no-information">No Information</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="8072">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/no-information">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="No Information">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/no-information">No Information</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="8071">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/no-information">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="No Information">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/no-information">No Information</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="8072">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/no-information">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="No Information">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/no-information">No Information</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="8071">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/no-information">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="No Information">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/no-information">No Information</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="8072">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/no-information">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="No Information">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/no-information">No Information</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="8071">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/no-information">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="No Information">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/no-information">No Information</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="8072">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/no-information">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="No Information">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/no-information">No Information</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="8071">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/no-information">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="No Information">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/no-information">No Information</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="8072">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/no-information">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="No Information">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/no-information">No Information</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="8071">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/no-information">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="No Information">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/no-information">No Information</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="8072">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/no-information">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="No Information">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/no-information">No Information</a></li>

                                            <li>
                                                <p class="one-liner"></p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1106">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/poolstead-plan-of-action">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Poolstead Plan of Action">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/poolstead-plan-of-action">Poolstead Plan
                                                    of Action</a></li>

                                            <li>
                                                <p class="one-liner">1797CL</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1484">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/poolstead-pineapple">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Poolstead Pineapple">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/poolstead-pineapple">Poolstead
                                                    Pineapple</a></li>

                                            <li>
                                                <p class="one-liner">2455CF</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1485">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/mardas-master-mariner">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Mardas Master Mariner">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/mardas-master-mariner">Mardas Master
                                                    Mariner</a></li>

                                            <li>
                                                <p class="one-liner">JR 3979BT</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1486">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/raising-hell-at-ramsayville">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Raising Hell At Ramsayville">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/raising-hell-at-ramsayville">Raising Hell
                                                    At Ramsayville</a></li>

                                            <li>
                                                <p class="one-liner">N6701806P02</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1108">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/rocheby-navy-blue">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Rocheby Navy Blue">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/rocheby-navy-blue">Rocheby Navy Blue</a>
                                            </li>

                                            <li>
                                                <p class="one-liner">JR 3492CF</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1487">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/cricklecreek-chiff-chaff">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Cricklecreek Chiff Chaff">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/cricklecreek-chiff-chaff">Cricklecreek
                                                    Chiff Chaff</a></li>

                                            <li>
                                                <p class="one-liner">0706CG</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1488">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/blackfyne-land-cruiser">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Blackfyne Land Cruiser">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/blackfyne-land-cruiser">Blackfyne Land
                                                    Cruiser</a></li>

                                            <li>
                                                <p class="one-liner">S2342107S02</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1489">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/lynwater-yellow-silk">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Lynwater Yellow Silk">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/lynwater-yellow-silk">Lynwater Yellow
                                                    Silk</a></li>

                                            <li>
                                                <p class="one-liner">U4968201U04</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1141">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/waifins-wing-and-a-prayer">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Waifin's Wing and A Prayer">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/waifins-wing-and-a-prayer">Waifin's Wing
                                                    and A Prayer</a></li>

                                            <li>
                                                <p class="one-liner">AKC SN670287/0</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1142">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/winnis-fresno-cat-circle">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Winni's Fresno Cat Circle">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/winnis-fresno-cat-circle">Winni's Fresno
                                                    Cat Circle</a></li>

                                            <li>
                                                <p class="one-liner">SKK 53250/96</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1143">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/winnis-madison">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Winni's Madison">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/winnis-madison">Winni's Madison</a></li>

                                            <li>
                                                <p class="one-liner">SKK 40077/00</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1144">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/winnies-ball-room">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Winnie's Ball Room">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/winnies-ball-room">Winnie's Ball Room</a>
                                            </li>

                                            <li>
                                                <p class="one-liner">SKK 42198/94</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1133">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/corlands-dove">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Corlands Dove">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/corlands-dove">Corlands Dove</a></li>

                                            <li>
                                                <p class="one-liner">JR 73158 Lab</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1490">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/kendi">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Kendi">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/kendi">Kendi</a></li>

                                            <li>
                                                <p class="one-liner">JR 81784 Lab</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1491">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/lester-simonis">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Lester Simonis">
                                            </a>
                                        </div>
                                        <ul class="MaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/lester-simonis">Lester Simonis</a></li>

                                            <li>
                                                <p class="one-liner">JR 71881 Lab</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>


                                <div class="animalBox">
                                    <div class="dna-not-available"></div>
                                    <span class="movieSymbol"></span>
                                    <span class="pedigreeOverlay cat-tooltip" cat_id="1492">
                                        <div>
                                            <a target="_blank" href="../../../cats-page-3/meli">
                                                <img class="pedigreeMainPicture"
                                                     src="https://pakistankennelclub.com.pk/db/assets/product_detail/unvail.jpeg"
                                                     alt="Meli">
                                            </a>
                                        </div>
                                        <ul class="FemaleIcon">
                                            <li><a class="bold" target="_blank"
                                                   href="../../../cats-page-3/meli">Meli</a></li>

                                            <li>
                                                <p class="one-liner">JR 82008 Lab</p>
                                            </li>
                                        </ul>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
