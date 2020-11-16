import "../css/styles.css";
import FeatureHandle from "./FeatureHandle";
import TechHandle from "./TechHandle";


// Our modules / classes
// import MobileMenu from "./modules/MobileMenu"



// Instantiate a new object using our modules/classes
// let mobileMenu = new MobileMenu()
const featureHandle = new FeatureHandle();
const techHandle = new TechHandle();


// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
  module.hot.accept()
}
