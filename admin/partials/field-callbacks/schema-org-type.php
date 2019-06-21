<?php
/**
 * SCallback for the Schema organization type field.
 *
 * @package    WAY_Plugin
 * @subpackage Admin\Partials\Field_Callbacks
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace WAY_Plugin\Admin\Partials\Field_Callbacks;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$types = [

	// First option save null.
	null          => __( 'Select one&hellip;', 'way-plugin' ),
	'Airline'     => __( 'Airline', 'way-plugin' ),
	'Corporation' => __( 'Corporation', 'way-plugin' ),

	// Educational Organizations.
	'EducationalOrganization' => __( 'Educational Organization', 'way-plugin' ),
		'CollegeOrUniversity' => __( '— College or University', 'way-plugin' ),
		'ElementarySchool'    => __( '— Elementary School', 'way-plugin' ),
		'HighSchool'          => __( '— High School', 'way-plugin' ),
		'MiddleSchool'        => __( '— Middle School', 'way-plugin' ),
		'Preschool'           => __( '— Preschool', 'way-plugin' ),
		'School'              => __( '— School', 'way-plugin' ),

	'GovernmentOrganization'  => __( 'Government Organization', 'way-plugin' ),

	// Local Businesses.
	'LocalBusiness' => __( 'Local Business', 'way-plugin' ),
		'AnimalShelter' => __( '— Animal Shelter', 'way-plugin' ),

		// Automotive Businesses.
		'AutomotiveBusiness' => __( '— Automotive Business', 'way-plugin' ),
			'AutoBodyShop'     => __( '—— Auto Body Shop', 'way-plugin' ),
			'AutoDealer'       => __( '—— Auto Dealer', 'way-plugin' ),
			'AutoPartsStore'   => __( '—— Auto Parts Store', 'way-plugin' ),
			'AutoRental'       => __( '—— Auto Rental', 'way-plugin' ),
			'AutoRepair'       => __( '—— Auto Repair', 'way-plugin' ),
			'AutoWash'         => __( '—— Auto Wash', 'way-plugin' ),
			'GasStation'       => __( '—— Gas Station', 'way-plugin' ),
			'MotorcycleDealer' => __( '—— Motorcycle Dealer', 'way-plugin' ),
			'MotorcycleRepair' => __( '—— Motorcycle Repair', 'way-plugin' ),

		'ChildCare'            => __( '— Child Care', 'way-plugin' ),
		'Dentist'              => __( '— Dentist', 'way-plugin' ),
		'DryCleaningOrLaundry' => __( '— Dry Cleaning or Laundry', 'way-plugin' ),

		// Emergency Services.
		'EmergencyService' => __( '— Emergency Service', 'way-plugin' ),
			'FireStation'   => __( '—— Fire Station', 'way-plugin' ),
			'Hospital'      => __( '—— Hospital', 'way-plugin' ),
			'PoliceStation' => __( '—— Police Station', 'way-plugin' ),

		'EmploymentAgency' => __( '— Employment Agency', 'way-plugin' ),

		// Entertainment Businesses.
		'EntertainmentBusiness' => __( '— Entertainment Business', 'way-plugin' ),
			'AdultEntertainment' => __( '—— Adult Entertainment', 'way-plugin' ),
			'AmusementPark'      => __( '—— Amusement Park', 'way-plugin' ),
			'ArtGallery'         => __( '—— Art Gallery', 'way-plugin' ),
			'Casino'             => __( '—— Casino', 'way-plugin' ),
			'ComedyClub'         => __( '—— Comedy Club', 'way-plugin' ),
			'MovieTheater'       => __( '—— Movie Theater', 'way-plugin' ),
			'NightClub'          => __( '—— Night Club', 'way-plugin' ),

		// Financial Services.
		'FinancialService' => __( '— Financial Service', 'way-plugin' ),
			'AccountingService' => __( '—— Accounting Service', 'way-plugin' ),
			'AutomatedTeller'   => __( '—— Automated Teller', 'way-plugin' ),
			'BankOrCreditUnion' => __( '—— Bank or Credit Union', 'way-plugin' ),
			'InsuranceAgency'   => __( '—— Insurance Agency', 'way-plugin' ),

		// Food Establishments.
		'FoodEstablishment' => __( '— Food Establishment', 'way-plugin' ),
			'Bakery'             => __( '—— Bakery', 'way-plugin' ),
			'BarOrPub'           => __( '—— Bar or Pub', 'way-plugin' ),
			'Brewery'            => __( '—— Brewery', 'way-plugin' ),
			'CafeOrCoffeeShop'   => __( '—— Cafe or Coffee Shop', 'way-plugin' ),
			'FastFoodRestaurant' => __( '—— Fast Food Restaurant', 'way-plugin' ),
			'IceCreamShop'       => __( '—— Ice Cream Shop', 'way-plugin' ),
			'Restaurant'         => __( '—— Restaurant', 'way-plugin' ),
			'Winery'             => __( '—— Winery', 'way-plugin' ),

		// Government Offices.
		'GovernmentOffice' => __( '— Government Office', 'way-plugin' ),
			'PostOffice' => __( '—— Post Office', 'way-plugin' ),

		// Health and Beauty Businesses.
		'HealthAndBeautyBusiness' => __( '— Health and Beauty Business', 'way-plugin' ),
			'BeautySalon'  => __( '—— Beauty Salon', 'way-plugin' ),
			'DaySpa'       => __( '—— Day Spa', 'way-plugin' ),
			'HairSalon'    => __( '—— Hair Salon', 'way-plugin' ),
			'HealthClub'   => __( '—— Health Club', 'way-plugin' ),
			'NailSalon'    => __( '—— Nail Salon', 'way-plugin' ),
			'TattooParlor' => __( '—— Tattoo Parlor', 'way-plugin' ),

		// Home and Construction Businesses.
		'HomeAndConstructionBusiness' => __( '— Home and Construction Business', 'way-plugin' ),
			'Electrician'       => __( '—— Electrician', 'way-plugin' ),
			'GeneralContractor' => __( '—— General Contractor', 'way-plugin' ),
			'HVACBusiness'      => __( '—— HVAC Business', 'way-plugin' ),
			'HousePainter'      => __( '—— House Painter', 'way-plugin' ),
			'Locksmith'         => __( '—— Locksmith', 'way-plugin' ),
			'MovingCompany'     => __( '—— MovingCompany', 'way-plugin' ),
			'Plumber'           => __( '—— Plumber', 'way-plugin' ),
			'RoofingContractor' => __( '—— Roofing Contractor', 'way-plugin' ),

		'InternetCafe' => __( '— Internet Cafe', 'way-plugin' ),

		// Legal Services.
		'LegalService' => __( '— Legal Service', 'way-plugin' ),
			'Attorney' => __( '—— Attorney', 'way-plugin' ),
			'Notary'   => __( '—— Notary', 'way-plugin' ),

		'Library' => __( '— Library', 'way-plugin' ),

		// Lodging Businesses.
		'LodgingBusiness' => __( '— Lodging Business', 'way-plugin' ),
			'BedAndBreakfast' => __( '—— Bed and Breakfast', 'way-plugin' ),
			'Campground'      => __( '—— Campground', 'way-plugin' ),
			'Hostel'          => __( '—— Hostel', 'way-plugin' ),
			'Hotel'           => __( '—— Hotel', 'way-plugin' ),
			'Motel'           => __( '—— Motel', 'way-plugin' ),
			'Resort'          => __( '—— Resort', 'way-plugin' ),

		'ProfessionalService' => __( '— Professional Service', 'way-plugin' ),
		'RadioStation'        => __( '— Radio Station', 'way-plugin' ),
		'RealEstateAgent'     => __( '— Real Estate Agent', 'way-plugin' ),
		'RecyclingCenter'     => __( '— Recycling Center', 'way-plugin' ),
		'SelfStorage'         => __( '— Self Storage', 'way-plugin' ),
		'ShoppingCenter'      => __( '— Shopping Center', 'way-plugin' ),

		// Sports Activity Locations.
		'SportsActivityLocation' => __( '— Sports Activity Location', 'way-plugin' ),
			'BowlingAlley'       => __( '—— Bowling Alley', 'way-plugin' ),
			'ExerciseGym'        => __( '—— Exercise Gym', 'way-plugin' ),
			'GolfCourse'         => __( '—— Golf Course', 'way-plugin' ),
			'HealthClub'         => __( '—— Health Club', 'way-plugin' ),
			'PublicSwimmingPool' => __( '—— Public Swimming Pool', 'way-plugin' ),
			'SkiResort'          => __( '—— Ski Resort', 'way-plugin' ),
			'SportsClub'         => __( '—— Sports Club', 'way-plugin' ),
			'StadiumOrArena'     => __( '—— Stadium or Arena', 'way-plugin' ),
			'TennisComplex'      => __( '—— Tennis Complex', 'way-plugin' ),

		// Store types.
		'Store' => __( '— Store', 'way-plugin' ),
			'AutoPartsStore'      => __( '—— Auto Parts Store', 'way-plugin' ),
			'BikeStore'           => __( '—— Bike Store', 'way-plugin' ),
			'BookStore'           => __( '—— Book Store', 'way-plugin' ),
			'ClothingStore'       => __( '—— Clothing Store', 'way-plugin' ),
			'ComputerStore'       => __( '—— Computer Store', 'way-plugin' ),
			'ConvenienceStore'    => __( '—— Convenience Store', 'way-plugin' ),
			'DepartmentStore'     => __( '—— Department Store', 'way-plugin' ),
			'ElectronicsStore'    => __( '—— Electronics Store', 'way-plugin' ),
			'Florist'             => __( '—— Florist', 'way-plugin' ),
			'FurnitureStore'      => __( '—— Furniture Store', 'way-plugin' ),
			'GardenStore'         => __( '—— Garden Store', 'way-plugin' ),
			'GroceryStore'        => __( '—— Grocery Store', 'way-plugin' ),
			'HardwareStore'       => __( '—— Hardware Store', 'way-plugin' ),
			'HobbyShop'           => __( '—— Hobby Shop', 'way-plugin' ),
			'HomeGoodsStore'      => __( '—— Home Goods Store', 'way-plugin' ),
			'JewelryStore'        => __( '—— Jewelry Store', 'way-plugin' ),
			'LiquorStore'         => __( '—— Liquor Store', 'way-plugin' ),
			'MensClothingStore'   => __( '—— Mens Clothing Store', 'way-plugin' ),
			'MobilePhoneStore'    => __( '—— Mobile Phone Store', 'way-plugin' ),
			'MovieRentalStore'    => __( '—— Movie Rental Store', 'way-plugin' ),
			'MusicStore'          => __( '—— Music Store', 'way-plugin' ),
			'OfficeEquipmentStore'=> __( '—— Office Equipment Store', 'way-plugin' ),
			'OutletStore'         => __( '—— Outlet Store', 'way-plugin' ),
			'PawnShop'            => __( '—— Pawn Shop', 'way-plugin' ),
			'PetStore'            => __( '—— Pet Store', 'way-plugin' ),
			'ShoeStore'           => __( '—— Shoe Store', 'way-plugin' ),
			'SportingGoodsStore'  => __( '—— Sporting Goods Store', 'way-plugin' ),
			'TireShop'            => __( '—— Tire Shop', 'way-plugin' ),
			'ToyStore'            => __( '—— Toy Store', 'way-plugin' ),
			'WholesaleStore'      => __( '—— Wholesale Store', 'way-plugin' ),

		'TelevisionStation'        => __( '— Television Station', 'way-plugin' ),
		'TouristInformationCenter' => __( '— Tourist Information Center', 'way-plugin' ),
		'TravelAgency'             => __( '— Travel Agency', 'way-plugin' ),

	'MedicalOrganization' => __( 'Medical Organization', 'way-plugin' ),
	'NGO'                 => __( 'NGO (Non-Governmental Organization', 'way-plugin' ),
	'PerformingGroup'     => __( 'Performing Group', 'way-plugin' ),
	'SportsOrganization'  => __( 'Sports Organization', 'way-plugin' )
];

$options = get_option( 'schema_org_type' );

$html = '<p><select id="schema_org_type" name="schema_org_type">';

foreach( $types as $type => $value ) {

	$selected = ( $options == $type ) ? 'selected="' . esc_attr( 'selected' ) . '"' : '';

	$html .= '<option value="' . esc_attr( $type ) . '" ' . $selected . '>' . esc_html( $value ) . '</option>';

}

$html .= '</select>';
$html .= sprintf(
	'<label for="schema_org_type"> %1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a>',
	$args[0],
	esc_attr( esc_url( 'https://schema.org/docs/full.html#C.Organization' ) ),
	esc_attr( __( 'Read documentation for organization types', 'way-plugin' ) )
);
$html .= '</p>';

echo $html;