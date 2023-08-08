@extends('frontend.layouts.app')
@section('title','PKC Rules and Regulation')
@section('content')
    <div class="page-content">
        @include('frontend.components._inner_header',['bg_img'=>asset('frontend/images/background/PKCRules-and-Regulation--1.png'),'breedcrumb'=>'PKC Rules and Regulation','page_title'=>'PKC Rules and Regulation' , 'overlay' => 'none'])
        <!-- Breed Detail -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="clearfix widget icon-bx-wraper bx-style-1 p-a20 widget_pages rules-regulation-filters">
                            <h5 class="widget-title">Rules and Regulations</h5>
                            <ul class="filters" data-toggle="buttons">
                                <li data-filter="general" class="">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button radius-xl custom-button-style"><span>General</span></a>
                                </li>
                                <li data-filter="litter-reg" class="">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button radius-xl custom-button-style"><span>Litter Registration Rules</span></a>
                                </li>
                                <li data-filter="import-cat" class="">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button radius-xl custom-button-style"><span>Rules Regarding Imported Cats</span></a>
                                </li>
                                <li data-filter="reg-without-pedigree" class="">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button radius-xl custom-button-style"><span>Registration of Purebred Cats, without Pedigree</span></a>
                                </li>
                                <li data-filter="microchipping" class="">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button radius-xl custom-button-style"><span>Microchipping & Litter Inspections</span></a>
                                </li>
                                <li data-filter="award-system" class="">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button radius-xl custom-button-style"><span>Award System at  Cat Shows</span></a>
                                </li>
                                <li data-filter="cat-show-classes" class="">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button radius-xl custom-button-style"><span>Classes at  Cat Shows</span></a>
                                </li>
                                <li data-filter="grades-interpretation" class="">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button radius-xl custom-button-style"><span>Interpretation of Grades</span></a>
                                </li>
                                <li data-filter="judging-procedure" class="">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button radius-xl custom-button-style"><span>Judging Procedure</span></a>
                                </li>
                                <li data-filter="breeding-rules" class="">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button radius-xl custom-button-style"><span>Cat Breeding Rules</span></a>
                                </li>
                                <li data-filter="show-entries" class="">
                                    <input type="radio">
                                    <a href="javascript:void(0);" class="site-button radius-xl custom-button-style"><span>Show Entries</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="clearfix">
                            <ul id="masonry" class="row dez-gallery-listing gallery-grid-4 m-b0  lightgallery">
                                <div class="row">
                                    <li class="card-container col-lg-12 col-sm-12 m-b30 general">
                                        <h2 class="text-uppercase m-b10">General</h2>
                                        <ul class="list-num-count">
                                            <li>
                                                Cat owners must keep their cats in a healthy environment and    provide proper food, good living conditions and provide appropriate veterinary care.
                                            </li>
                                            <li>
                                                Cats must be bred according to PKC Breeding Rules.
                                            </li>
                                            <li>
                                                At the Shows, all exhibitors/ handlers must display sportsmanship. No handler should distract other cats in the ring to gain undue advantage.
                                            </li>
                                            <li>
                                                Other than age of the cat, an exhibitor must not give any other information to judge pertaining to cat’s ownership, pedigree or its past achievements. However, this provision will not apply to the Shows of affiliated Breed Clubs, where their own rules allow a Judge to ask for the pedigree.
                                            </li>
                                            <li>
                                                No competitor, either by word, gesture or action will show any dissent at the decision of the Judge inside or outside the ring.
                                            </li>
                                            <li>
                                                It is an accepted right of any cat owner to show or not to take part in any Show. However, no one will persuade others not to participate in a  Show.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="card-container col-lg-12 col-sm-12 m-b30 litter-reg">
                                        <h2 class="text-uppercase m-b10">Litter Registration Rules</h2>
                                        <ul class="list-num-count">
                                            <li>
                                                Both the parents of the litter must be registered with the PKC.
                                            </li>
                                            <li>
                                                Bitch(Dam) Minimum age 18 months and maximum age up to 9 years, at the time of mating.
                                            </li>
                                            <li>
                                                Cats(Sire) Minimum age 12 months and maximum age up to 11 years, at the time of mating
                                            </li>
                                            <li>
                                                Owner of the bitch (dam) must have a Kennel name, Suffix / Affix registered with PKC.
                                            </li>
                                            <li>
                                                The stud certificate should be filled online through this website, within 15 days after the date of mating.
                                            </li>
                                            <li>
                                                The litter must be registered within three months of the birth of the litter.
                                            </li>
                                            <li>
                                                Pedigree Certificates will be sent by Courier Service at the address of the Breeder after complete payment is done to the club.
                                            </li>
                                            <li>
                                                If, at any stage, it is found that the Breeder has given any wrong details or there has been any violation, registration of cats will be canceled.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="card-container col-lg-12 col-sm-12 m-b30 import-cat">
                                        <h2 class="text-uppercase m-b10">Rules Regarding Imported Cats</h2>
                                        <ul class="list-num-count">
                                            <li>
                                                All pedigreed cats which are imported into Pakistan  must be registered with PKC immediately, if it's all documents are legal and valid.
                                            </li>
                                            <li>
                                                An imported cat can ONLY be registered in the name of importer, whose name appears as owner on import pedigree and export documents. There after if the cat is sold, the ownership can be transferred to the next owner on a prescribed PKC form.
                                            </li>
                                            <li>
                                                If a mated female is imported, which was mated following the breeding rules of exporting country , litter will be registered, provided there is a  Export Pedigree and a valid Stud Certificate that the bitch was mated in exporting country.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="card-container col-lg-12 col-sm-12 m-b30 reg-without-pedigree">
                                        <h2 class="text-uppercase m-b10">Registration of Purebred Cats, without Pedigree</h2>
                                        <ul class="list-num-count">
                                            <li>
                                                The owner must produce the cat before any PKC official Judges and the Judge would issue an Opinion Certificate saying that in his/her opnion the cat is a true representative of its breed.
                                            </li>
                                            <li>
                                                The owner would submit the Registration Application along with the  Judge’s Opnion Certificate.
                                            </li>
                                            <li>
                                                PKC would register the cat and issue the single cat pedigree showing ancestors as "Un-known".
                                            </li>
                                            <li>
                                                Cats registered with the PKC can be used for breeding and shown in Shows.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="card-container col-lg-12 col-sm-12 m-b30 microchipping">
                                        <h2 class="text-uppercase m-b10">Microchipping & Litter Inspections</h2>
                                        <ul class="list-num-count">
                                            <li>
                                                Microchipping is mandatory for all cats registered with PKC.
                                            </li>
                                            <li>
                                                Microchipping in puppies can be done at six weeks of ages. After microchipping, the puppies can leave the premises of the owner any time. It will be the duty of the Breed Warden to ensure that litters are inspected as soon as possible, and the staff of PKC will ensure dilivery of Pedigree Papers and microchips.
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="card-container col-lg-12 col-sm-12 m-b30 award-system">
                                        <h2 class="text-uppercase m-b10">Award System at  Cat Shows</h2>
                                        <ul class="list-num-count">
                                            <li>
                                                No Points are not awarded in Shows .
                                            </li>
                                            <li>
                                                Challenge Certificate (CC) can be awarded by a judge to Only one cat and one bitch in each breed. Only the <b>"Winner of Winners"</b>
                                                Cat and <b>"Winner of Winners"</b> Bitch is eligible to get a Challenge Certificate, but it is <b>NOT</b> automatic.
                                                If a judge feels that the cat or bitch is not of sufficient quality, he or she may not award Challenge Certificate.
                                            </li>
                                            <li>
                                                A cat getting three Challenge Certificates, from three different judges becomes a Champion. Award of CACIB and CAC, will be equal to a Challenge Certificate.
                                            </li>
                                            <li>
                                                Once a cat is a Champion, it <b>cannot</b> compete for any more Challenge Certificates. It competes in Champion Class only.
                                            </li>
                                            <li>
                                                A Champion cat will compete in Champion Class only and compete for Best of Breed, Best of Group and Best in Show.
                                            </li>
                                            <li>
                                                If a cat has been made Champion in a country other than Pakistan, to earn title of Pakistan Champion, the cat will have to compete in its Class (other than the Champion Class) and earn three Challenge Certificates to earn the title of Pakistan Champion. However, if the owner does not want Pakistan Champion title, the cat may be shown in Champion class only, but the cat will not be entitled to the title of Pak. Ch.
                                            </li>
                                            <li>
                                                All cats will be graded "Excellent", "Very Good", "Good", "Disqualified" and "Cannot be judged".
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="card-container col-lg-12 col-sm-12 m-b30 cat-show-classes">
                                        <h2 class="text-uppercase m-b10">Classes at  Cat Shows</h2>
                                        <ul class="list-num-count">
                                            <li>
                                                Puppy Class 6 To 9 months (CC<b> cannot </b>be awarded)
                                            </li>
                                            <li>
                                                Junior Class 9 to 18 months (CC<b> can </b>be awarded)
                                            </li>
                                            <li>
                                                Intermediate class 15 to 24 months (CC<b> can </b>be awarded)
                                            </li>
                                            <li>
                                                Open Class 15 months and over (CC<b> can </b>be awarded)
                                            </li>
                                            <li>
                                                Champion Class All Champions (CC<b> cannot </b>be awarded)
                                            </li>
                                            <li>
                                                Veteran Class 8 years and over (CC<b> can </b>be awarded)
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="card-container col-lg-12 col-sm-12 m-b30 grades-interpretation">
                                        <h2 class="text-uppercase m-b10">Interpretation of Grades</h2>
                                        <h5>EXCELLENT</h5>
                                        <p>may only be awarded to a cat which comes very close to the ideal standard of the breed, which is presented in excellent condition, displays a harmonious, well-balanced temperament, is of high class and has excellent posture. It is excellent as per international standards. Its superior characteristics in respect of its breed permit that minor imperfections can be ignored; it must however have the typical features of its sex.</p>
                                        <h5>VERY GOOD</h5>
                                        <p>may only be awarded to a cat, which possesses the typical features of its breed, which has well-balanced proportions and is in correct condition. A few minor faults may be tolerated but none of a morphological nature. This award can only be granted to a cat that shows class.</p>
                                        <h5>GOOD</h5>
                                        <p>is to be awarded to a cat that possesses the main features of its breed however showing weaknesses.</p>
                                        <h5>DISQUALIFIED</h5>
                                        <p>must be awarded to a cat which does not correspond to the type required by the breed standard; which shows a behaviour clearly not in line with its standard or which behaves aggressively; which has testicular abnormalities; which has dental flaw or a jaw anomaly; which shows a colour and/or coat imperfection or clearly shows signs of albinism. This qualification shall also be awarded to cats that correspond so little to a single feature of the breed that their health is threatened. It should furthermore be awarded to cats that show eliminating faults in regard to the breed standard.</p>
                                        <h5>CANNOT BE JUDGED</h5>
                                        <p>This rating is to be given to any cat which does not move, constantly jumps up and down on its handler or tries to get out of the ring, makes it impossible to assess the gait and the movement or avoids constantly to be examined by the judge and makes it impossible to inspect teeth, anatomy and structure, tail or testicles. This rating is also to be given if traces of operations or treatment can be observed which seem to indicate that the exhibitor wanted to deceive the judge.</p>
                                    </li>
                                    <li class="card-container col-lg-12 col-sm-12 m-b30 judging-procedure">
                                        <h2 class="text-uppercase m-b10">Judging Procedure</h2>
                                        <h5>Class Judging</h5>
                                        <p>Cats and Bitches will be individually and separately judged according to their classes, starting with the Baby Puppies. The judge will grade all the cats presented but will place the exhibits 1st, 2nd and 3rd only. The cat and bitch placed First in its class, irrespective of its grading will be called "Class Winner".</p>
                                        <h5>Winner of Winners Bitch</h5>
                                        <p>At the conclusion of judging all classes, the steward will call all the class winner bitches except winners of Baby and Puppy classes. At this stage, the judge will award Challenge Certificate (CC) to a bitch other than the winner bitch of Champion class. However, the award of CC is NOT automatic. If the judge feels that there is no bitch with "such a merit as to be worthy of becoming a champion", he may withhold a CC. Now the judge will select Winner of Winners bitch, which obviously will be either the winner bitch of Champion class or the one, which has received a CC. This will be the Best Bitch of the Breed.</p>
                                        <h5>Winner of Winners Cat</h5>
                                        <p>The above procedure will be repeated to select a Winner of Winner Cat i.e., the Best Cat of the breed.</p>
                                        <p><i>Note:</i> To help judge ensure that a Champion Cat is not awarded a CC, the winner of Champion class, irrespective of its catalogue number will be placed first in the judging lineup, followed by winners of Open, Intermediate and Junior classes.</p>
                                        <h5>Best of Breed</h5>
                                        <p>After Best Cat of the Breed and Best Bitch of the Breed has been separately selected, the judge will select the Best of Breed and Second Best of the Breed.</p>
                                        <h5>Best in Group</h5>
                                        <p>After Best of Breeds of all the breeds in a particular Group have been selected, the steward will call and lineup all the Best of Breed winners for the judge to select the Best in Group and reserve Best in Group.</p>
                                        <h5>Best in Show</h5>
                                        <p>After all the ten Best in Group winners have been selected the steward will call all the Group Winners and line them up for the judge. The judge will select the Best in Show, the Second Best in Show and Third Best in Show.</p>
                                    </li>
                                    <li class="card-container col-lg-12 col-sm-12 m-b30 breeding-rules">
                                        <h2 class="text-uppercase m-b10">Cat Breeding Rules</h2>
                                        <ul class="list-num-count">
                                            <li>All litters will be inspected before the pups are registered and pedigrees are issued.</li>
                                            <li>The National Breed Warden will appoint Group Breed Wardens who will be available to all members for advice.</li>
                                            <li>
                                                <h5>Rules for Breeders and Owners</h5>
                                                <ul class="list-check-circle primary">
                                                    <li>The cat must be minimum 12 months old at the time of mating.</li>
                                                    <li>The bitch must be minimum 20 months old at the time of mating.</li>
                                                    <li>Breeder must inform respective group breed warden regarding the litter within 7 days of whelping.</li>
                                                    <li>Stud cat owner must upload the stud certificate within 14 days of mating on PKC portal.</li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h5>The Litter Inspection</h5>
                                                <p>The litter inspection shall be conducted at 8 weeks of age and it will include following examinations:</p>
                                                <ul class="list-check-circle primary">
                                                    <li>Pedigrees of parents in accordance with the litter registration application.</li>
                                                    <li>Age of the parents on the day of the mating.</li>
                                                    <li>Check of the Microchip number of the parents.</li>
                                                    <li>Overall condition of the bitch.</li>
                                                    <li>Litter spacing.</li>
                                                    <li>Vaccination Records.</li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h5>Evaluation of the litter</h5>
                                                <p>The bitch and puppies will be physically examined and observations will be noted concerning the following:</p>
                                                <ul class="list-check-circle primary">
                                                    <li>Health and overall condition of mother.</li>
                                                    <li>Health and overall condition of puppies.</li>
                                                    <li>Prominent faults in puppies.</li>
                                                    <li>All faults of the bite overshot or undershot bite will be noted.</li>
                                                    <li>No testicle or only one testicles.</li>
                                                    <li>Broken tails.</li>
                                                </ul>
                                            </li>
                                            <li>
                                                Litter inspection can be applied online on PKC portal after one week of whelping.
                                            </li>
                                            <li>
                                                Once the litter inspection is approved, litter registration can be applied.
                                            </li>
                                            <li>
                                                <h5>Application for Pedigrees</h5>
                                                <p>To apply for pedigrees for the puppies the breeder must give copies of the following documents to PKC office or Group Breed Warden:</p>
                                                <ul class="list-check-circle primary">
                                                    <li>PKC Litter registration form.</li>
                                                    <li>Kennel prefix registration certificate.</li>
                                                    <li>Stud certificate.</li>
                                                    <li>Pedigree certificate of both Sire and Dam.</li>
                                                    <li>Litter registration fees.</li>
                                                    <li>Owner or Group breed warden submits all the above-mentioned documentation to the PKC office for processing of pedigrees.</li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h5>Maximum Age for Breeding</h5>
                                                <ul class="list-check-circle primary">
                                                    <li>The maximum age for breeding for Females is 9 years.</li>
                                                    <li>The maximum age for breeding for Males is 11 years.</li>
                                                </ul>
                                            </li>
                                            <li>
                                                <h5>Forms & Fees</h5>
                                                <p>All charges along with the form applications can be found at <b>Fees Structure </b>page of PKC Portal.</p>
                                                <ul class="list-check-circle primary">
                                                    <li>Litter registration fee 3000/-.</li>
                                                    <li>Pedigree fee per puppy 1500/:</li>
                                                    <li>Microchip fee 1500/: </li>
                                                    <li>To become a club member please visit Become a member page.</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    <li class="card-container col-lg-12 col-sm-12 m-b30 show-entries">
                                        <h2 class="text-uppercase m-b10">Show Entries</h2>
                                        <ul class="list-num-count">
                                            <li>
                                                In all PKC Shows, entries will be done before the last date given for show entries.
                                            </li>
                                            <li>
                                                Entries can be done online and through detailed individuals of club.
                                            </li>
                                            <li>
                                                After last date of entries, PKC portal will not accept any entry and will automatically complete the catalogue and upload.
                                            </li>
                                            <li>
                                                No entry will be accepted without payment.
                                            </li>
                                            <li>
                                                All registrations, stud certificates and transfer of cats will be available online.
                                            </li>
                                        </ul>
                                    </li>
                                    </li>
                                </div>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Filters END -->
                <!-- Images  -->
            </div>
        </div>
        <!-- Breed Detail END -->
    </div>
@endsection
@section('scripts')
{{--    <script>--}}
{{--        jQuery(document).ready(function () {--}}

{{--        });--}}
{{--        $(window).scroll(function(){--}}
{{--            if ($(this).scrollTop() > 250 && $(this).scrollTop() < 5900) {--}}
{{--                $('.rules-regulation-filters').addClass('fixed-filters-sidebar');--}}
{{--            } else {--}}
{{--                $('.rules-regulation-filters').removeClass('fixed-filters-sidebar');--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
@endsection
