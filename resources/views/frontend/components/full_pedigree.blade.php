

<div class="wpb_wrapper">
    <div class="row-fluid">
        <div class="col-sm-12">
            <h1 class="main-heading">Pedigree:
                <span class="pull-right" style="font-size: 14px; margin-top: 3px;">
                                                    <!--
                                                   <a class="open-modal button-1 button green" href="https://www.gsdcp.org/db/cat/view_pedigree/12116-ada-vom-asien">View Full Pedigree</a>-->
                                                </span>
            </h1>
            <span class="my-2">
                <b class="panel-heading">Linebreeding: </b>
                @if(!empty($line_breeding))
                    {!! $line_breeding !!}
                @else
                    <p>No common entries in 5 generations</p>
                @endif
            </span>
        </div>
    </div>
    <div class="row-fluid">
        <div class="col-sm-12">

            <div class="overflow" style="width: 100%;  overflow: auto">
                <div id="extended_pedigree_container">
                    <div class="generation_depth">
                                                        <span>
                                                            I Parents
                                                            <hr class="style-two-green">
                                                        </span>
                        <span>
                                                            II Grand Parents
                                                            <hr class="style-two-green">
                                                        </span>
                        <span>
                                                            III G.Grand Parents
                                                            <hr class="style-two-green">
                                                        </span>
                        <span>
                                                            IV G.G.Grand Parents
                                                            <hr class="style-two-green">
                                                        </span>
                        <span>
                                                            V G.G.G.Grand Parents
                                                            <hr class="style-two-green">
                                                        </span>
                    </div>

                    <div class="pedigree_line">

                        <div class="generation pedigree_gen1">
                            @foreach($pedigree['level1'] as $level1)
                                @if($level1 !== null)
                                    <div class="animalBox">
                                        <div class="dna-not-available"></div>
                                        <span class="movieSymbol"></span>
                                        <span class="pedigreeOverlay cat-tooltip">
                                                                    <div>
                                                                        <a href="{{route('pedigree',$level1->seo_slug)}}">
                                                                             @if($level1->pet_pic !== null)
                                                                                <img class="pedigreeMainPicture"
                                                                                     src="{{asset('storage/cats/'.$level1->pet_pic)}}"
                                                                                     alt="{{$level1->pet_name}}">
                                                                            @else
                                                                                <img class="pedigreeMainPicture"
                                                                                     src="{{asset('frontend/images/cat-no-pic.png')}}"
                                                                                     alt="{{$level1->pet_name}}">
                                                                            @endif
                                                                        </a>
                                                                    </div>
                                                                    <ul class="MaleIcon">
                                                                        <li>
                                                                            <a class="bold"
                                                                               href="{{route('pedigree',$level1->seo_slug)}}">
                                                                                {{$level1->pet_name ?? ''}}
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <p class="one-liner"></p>
                                                                        </li>
                                                                        <li>
                                                                            @if($level1->registration !== null)
                                                                                <p class="one-liner">{{$cat->registration ?? ''}}</p>
                                                                            @elseif($level1->foreign_no !== null)
                                                                                <p class="one-liner">{{$level1->foreign_no ?? ''}}</p>
                                                                            @else
                                                                                <p class="one-liner"></p>
                                                                            @endif
                                                                        </li>
                                                                        <li>
                                                                            @if($level1->whelped !== null)
                                                                                <p class="one-liner">
                                                                                    {{date('d F Y',strtotime($level1->whelped))}}
                                                                                </p>
                                                                            @else
                                                                                <p class="one-liner"></p>
                                                                            @endif
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                    </div>
                                @else
                                    <div class="animalBox">
                                        <div class="dna-not-available"></div>
                                        <span class="movieSymbol"></span>
                                        <span class="pedigreeOverlay cat-tooltip">
                                                                    <div>
                                                                        <a href="javascript:void (0);">
                                                                            <img class="pedigreeMainPicture"
                                                                                 src="{{asset('frontend/images/cat-no-pic.png')}}"
                                                                                 alt="No Information">
                                                                        </a>
                                                                    </div>
                                                                    <ul class="MaleIcon">
                                                                        <li>
                                                                            <a class="bold" href="javascript:void (0);">
                                                                                No Information</a>
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="generation pedigree_gen2">
                            @foreach($pedigree['level2'] as $level2)
                                @if($level2 != null)
                                    <div class="animalBox">
                                        <div class="dna-not-available"></div>
                                        <span class="movieSymbol"></span>
                                        <span class="pedigreeOverlay cat-tooltip">
                                                                    <div>
                                                                        <a href="{{route('pedigree',$level2->seo_slug)}}">
                                                                             @if($level2->pet_pic !== null)
                                                                                <img class="pedigreeMainPicture"
                                                                                     src="{{asset('storage/cats/'.$level2->pet_pic)}}"
                                                                                     alt="{{$level2->pet_name}}">
                                                                            @else
                                                                                <img class="pedigreeMainPicture"
                                                                                     src="{{asset('frontend/images/cat-no-pic.png')}}"
                                                                                     alt="{{$level2->pet_name}}">
                                                                            @endif
                                                                        </a>
                                                                    </div>
                                                                    <ul class="MaleIcon">
                                                                        <li>
                                                                            <a class="bold"
                                                                               href="{{route('pedigree',$level2->seo_slug)}}">
                                                                                {{$level2->pet_name ?? ''}}
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <p class="one-liner"></p>
                                                                        </li>
                                                                        <li>
                                                                            @if($level2->registration !== null)
                                                                                <p class="one-liner">{{$level2->registration ?? ''}}</p>
                                                                            @elseif($level2->foreign_no !== null)
                                                                                <p class="one-liner">{{$level2->foreign_no ?? ''}}</p>
                                                                            @else
                                                                                <p class="one-liner"></p>
                                                                            @endif
                                                                        </li>
                                                                        <li>
                                                                            @if($level2->whelped !== null)
                                                                                <p class="one-liner">
                                                                                    {{date('d F Y',strtotime($level2->whelped))}}
                                                                                </p>
                                                                            @else
                                                                                <p class="one-liner"></p>
                                                                            @endif
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                    </div>
                                @else
                                    <div class="animalBox">
                                        <div class="dna-not-available"></div>
                                        <span class="movieSymbol"></span>
                                        <span class="pedigreeOverlay cat-tooltip">
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <img class="pedigreeMainPicture"
                                                                                 src="{{asset('frontend/images/cat-no-pic.png')}}"
                                                                                 alt="No Information">
                                                                        </a>
                                                                    </div>
                                                                    <ul class="MaleIcon">
                                                                        <li><a class="bold" href="javascript:void (0);">No Information</a></li>
                                                                    </ul>
                                                                </span>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="generation pedigree_gen3">
                            @foreach($pedigree['level3'] as $level3)
                                @if($level3 !== null)
                                    <div class="animalBox">
                                        <div class="dna-not-available"></div>
                                        <span class="movieSymbol"></span>
                                        <span class="pedigreeOverlay cat-tooltip">
                                                                    <div>
                                                                        <a href="{{route('pedigree',$level3->seo_slug)}}">
                                                                             @if($level3->pet_pic !== null)
                                                                                <img class="pedigreeMainPicture"
                                                                                     src="{{asset('storage/cats/'.$level3->pet_pic)}}"
                                                                                     alt="{{$level3->pet_name}}">
                                                                            @else
                                                                                <img class="pedigreeMainPicture"
                                                                                     src="{{asset('frontend/images/cat-no-pic.png')}}"
                                                                                     alt="{{$level3->pet_name}}">
                                                                            @endif
                                                                        </a>
                                                                    </div>
                                                                    <ul class="MaleIcon">
                                                                        <li>
                                                                            <a class="bold"
                                                                               href="{{route('pedigree',$level3->seo_slug)}}">
                                                                                {{$level3->pet_name ?? ''}}
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            @if($level3->registration !== null)
                                                                                <p class="one-liner">{{$level3->registration ?? ''}}</p>
                                                                            @elseif($level3->foreign_no !== null)
                                                                                <p class="one-liner">{{$level3->foreign_no ?? ''}}</p>
                                                                            @else
                                                                                <p class="one-liner"></p>
                                                                            @endif
                                                                        </li>
                                                                        <li>
                                                                            @if($level3->whelped !== null)
                                                                                <p class="one-liner">
                                                                                    {{date('d F Y',strtotime($level3->whelped))}}
                                                                                </p>
                                                                            @else
                                                                                <p class="one-liner"></p>
                                                                            @endif
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                    </div>
                                @else
                                    <div class="animalBox">
                                        <div class="dna-not-available"></div>
                                        <span class="movieSymbol"></span>
                                        <span class="pedigreeOverlay cat-tooltip">
                                                                    <div>
                                                                        <a href="javascript:void(0);">
                                                                            <img class="pedigreeMainPicture"
                                                                                 src="{{asset('frontend/images/cat-no-pic.png')}}"
                                                                                 alt="No Information">
                                                                        </a>
                                                                    </div>
                                                                    <ul class="MaleIcon">
                                                                        <li><a class="bold" href="javascript:void(0);">No Information</a></li>
                                                                    </ul>
                                                                </span>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                        <div class="generation pedigree_gen4">
                            @foreach($pedigree['level4'] as $level4)
                                @if($level4 != null)
                                    <div class="animalBox">
                                        <div class="dna-not-available"></div>
                                        <span class="movieSymbol"></span>
                                        <span class="pedigreeOverlay cat-tooltip">
                                                                            <div>
                                                                                <a href="{{route('pedigree',$level4->seo_slug)}}">
                                                                                     @if($level4->pet_pic !== null)
                                                                                        <img class="pedigreeMainPicture"
                                                                                             src="{{asset('storage/cats/'.$level4->pet_pic)}}"
                                                                                             alt="{{$level4->pet_name}}">
                                                                                    @else
                                                                                        <img class="pedigreeMainPicture"
                                                                                             src="{{asset('frontend/images/cat-no-pic.png')}}"
                                                                                             alt="{{$level4->pet_name}}">
                                                                                    @endif
                                                                                </a>
                                                                            </div>
                                                                            <ul class="MaleIcon">
                                                                                <li>
                                                                                    <a class="bold"
                                                                                       href="{{route('pedigree',$level4->seo_slug)}}">
                                                                                        {{$level4->pet_name ?? ''}}
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    @if($level4->registration !== null)
                                                                                        <p class="one-liner">{{$level4->registration ?? ''}}</p>
                                                                                    @elseif($level4->foreign_no !== null)
                                                                                        <p class="one-liner">{{$level4->foreign_no ?? ''}}</p>
                                                                                    @else
                                                                                        <p class="one-liner"></p>
                                                                                    @endif
                                                                                </li>
                                                                            </ul>
                                                                        </span>
                                    </div>
                                @else
                                    <div class="animalBox">
                                        <div class="dna-not-available"></div>
                                        <span class="movieSymbol"></span>
                                        <span class="pedigreeOverlay cat-tooltip">
                                                                    <div>
                                                                        <a href="javascript:void (0);">
                                                                            <img class="pedigreeMainPicture"
                                                                                 src="{{asset('frontend/images/cat-no-pic.png')}}"
                                                                                 alt="No Information">
                                                                        </a>
                                                                    </div>
                                                                    <ul class="MaleIcon">
                                                                        <li>
                                                                            <a class="bold" href="javascript:void (0);">No Information</a>
                                                                        </li>
                                                                    </ul>
                                                                </span>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="generation pedigree_gen5">
                            @foreach($pedigree['level5'] as $level5)
                                @if($level5 !== null)
                                    <div class="animalBox">
                                        <div class="dna-not-available"></div>
                                        <span class="movieSymbol"></span>
                                        <span class="pedigreeOverlay cat-tooltip">
                                                                            <div>
                                                                                        <a href="{{route('pedigree',$level5->seo_slug)}}">
                                                                                             @if($level5->pet_pic !== null)
                                                                                                <img
                                                                                                    class="pedigreeMainPicture"
                                                                                                    src="{{asset('storage/cats/'.$level5->pet_pic)}}"
                                                                                                    alt="{{$level5->pet_name}}">
                                                                                            @else
                                                                                                <img
                                                                                                    class="pedigreeMainPicture"
                                                                                                    src="{{asset('frontend/images/cat-no-pic.png')}}"
                                                                                                    alt="{{$level5->pet_name}}">
                                                                                            @endif
                                                                                        </a>
                                                                                    </div>
                                                                            <ul class="MaleIcon">
                                                                                <li>
                                                                                    <a class="bold"
                                                                                       href="{{route('pedigree',$level5->seo_slug)}}">
                                                                                        {{$level5->pet_name ?? ''}}
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </span>
                                    </div>
                                @else
                                    <div class="animalBox">
                                        <div class="dna-not-available"></div>
                                        <span class="movieSymbol"></span>
                                        <span class="pedigreeOverlay cat-tooltip">
                                                                            <div>
                                                                                <a href="javascript:void(0);">
                                                                                    <img class="pedigreeMainPicture"
                                                                                         src="{{asset('frontend/images/pkc-no-image.jpeg')}}"
                                                                                         alt="No Information">
                                                                                </a>
                                                                            </div>
                                                                            <ul class="MaleIcon">
                                                                                <li>
                                                                                    <a class="bold"
                                                                                       href="javascript:void(0);">No Information</a>
                                                                                </li>
                                                                                <li>
                                                                                    <p class="one-liner"></p>
                                                                                </li>
                                                                            </ul>
                                                                        </span>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
</div>
