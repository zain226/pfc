<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use App\Models\Breeder;
use App\Models\BreederOld;
use App\Models\BreedOld;
use App\Models\Color;
use App\Models\ColorOld;
use App\Models\ContactFormQuery;
use App\Models\CatProperty;
use App\Models\CatPropertyOld;
use App\Models\Event;
use App\Models\Expense;
use App\Models\Gallery;
use App\Models\GalleryGrid;
use App\Models\Gender;
use App\Models\GenderOld;
use App\Models\Group;
use App\Models\LitterRegistration;
use App\Models\MembershipApplication;
use App\Models\Owner;
use App\Models\OwnerOld;
use App\Models\OwnershipTransferLog;
use App\Models\SellingCat;
use App\Models\Service;
use App\Models\ShowEntry;
use App\Models\SingleCatRegistration;
use App\Models\StudCertificate;
use App\Models\Subscriber;
use App\Models\Title;
use App\Models\TransactionLog;
use App\Models\User;
use App\Models\VisitingJudge;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $old_breeder_model;
    public $old_owner_model;
    public $old_breed_model;
    public $old_color_model;
    public $old_gender_model;
    public $old_cat_property_model;

    public $user_model;
    public $cat_property_model;
    public $breed_model;
    public $breeder_model;
    public $owner_model;
    public $color_model;
    public $gender_model;
    public $group_model;
    public $stud_certificate_model;
    public $service_model;
    public $transaction_log_model;
    public $contact_form_model;
    public $gallery_grid_model;
    public $gallery_model;
    public $event_model;
    public $show_entry_model;
    public $litter_registration_model;
    public $ownership_transfer_log_model;
    public $membership_application_model;
    public $expense_model;
    public $selling_cat_model;
    public $subscriber_model;
    public $titles_model;
    public $sing_cat_reg_model;
    public $visting_judge_model;
    public function __construct()
    {
        $this->user_model = new User();
        $this->cat_property_model = new CatProperty();
        $this->breed_model = new Breed();
        $this->breeder_model = new Breeder();
        $this->owner_model = new Owner();
        $this->color_model = new Color();
        $this->gender_model = new Gender();
        $this->group_model = new Group();
        $this->service_model = new Service();
        $this->transaction_log_model = new TransactionLog();
        $this->contact_form_model = new ContactFormQuery();
        $this->gallery_grid_model = new GalleryGrid();
        $this->gallery_model = new Gallery();
        $this->event_model = new Event();
        $this->show_entry_model = new ShowEntry();
        $this->stud_certificate_model = new StudCertificate();
        $this->litter_registration_model = new LitterRegistration();
        $this->ownership_transfer_log_model = new OwnershipTransferLog();
        $this->membership_application_model = new MembershipApplication();
        $this->expense_model = new Expense();
        $this->selling_cat_model = new SellingCat();
        $this->subscriber_model = new Subscriber();
        $this->titles_model = new Title();
        $this->sing_cat_reg_model = new SingleCatRegistration();

        $this->old_cat_property_model = new CatPropertyOld();
        $this->old_breed_model = new BreedOld();
        $this->old_breeder_model = new BreederOld();
        $this->old_color_model = new ColorOld();
        $this->old_gender_model = new GenderOld();
        $this->old_owner_model = new OwnerOld();
        $this->visting_judge_model = new VisitingJudge();
    }
}
