import "../css/styles.css";
import FeatureHandle from "./FeatureHandle";


// Our modules / classes
// import MobileMenu from "./modules/MobileMenu"



// Instantiate a new object using our modules/classes
// let mobileMenu = new MobileMenu()
const featureHandle = new FeatureHandle();


// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
  module.hot.accept()
}
