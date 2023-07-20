//Third Party
import AOS from 'aos';
import 'aos/dist/aos.css';

//Layout
import { flyOutMenu } from './layout/menu';

flyOutMenu();
AOS.init({
  duration: 700,
});
