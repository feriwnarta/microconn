<?php

class WorkDetail extends Controller
{
    public function housingmanagement()
    {
        $data['title'] = 'Detail Work';

        /**
         *  data dinamis untuk section background and client
         * 
         *  *************************************************************************
         *  data[background subtitle] = digunakan untuk isi dari background application
         *  data[client] = digunakan untuk isi dari client aplikasi
         *  data[disicipline] = digunakan untuk isi dari disiplice aplikasi 
         *  data[product designer] = digunakan untuk isi dari product designer aplikasi
         *  data['engineer-type] = digunakan untuk type enginer aplikasi
         *  data[engineer] = digunakan untuk isi dari Enginer pembuat aplikasi
         * **************************************************************************
         * 
         */
        $data['background-subtitle'] = 'Pantai Indah Kapuk (PIK) is a residential complex located in North Jakarta.
        There are many residential clusters in it and among them are Cluster Akasia Golf, Cluster Cendana Golf, Cluster Ebony Golf and Cluster Damar Golf are included in Citizens Association 05 that performs the management and management of these clusters. However, to take care of and manage a dwelling that has 700s of residential houses is not so easy because it must control the workers of different environmental functions and serve the needs of residents quickly, safely and comfortably.';
        $data['client'] = 'PT Sinar Solusi Informatika';
        $data['dicipline'] = 'Mobile Application';
        $data['product-designer'] = 'Riga Feraldy Al Hakim';
        $data['engineer-type'] = 'Mobile Engineer';
        $data['engineer'] = 'Feri Winarta';


        /**
         *  data dinamis untuk section the process
         * 
         *  *******************************************************************************
         *  data['understanding-value] = digunakan untuk isi process underrstanding
         *  data['research-value] = digunakan untuk isi process research
         *  data['wireframing-value] = digunakan untuk isi process wireframing
         *  data['visual-design-value] = digunakan untuk isi process visual design
         *  data['development-value] = digunakan untuk isi process development 
         *  data['test-deployment-value] = digunakan untuk isi process test and deployment
         *  ********************************************************************************
         */
        $data['understanding-value'] = 'The process that is done first is to really understand what Stakeholders, Management and also users want from this application.
        This is an important phase to ensure and understand how we can help the company achieve its goals.';
        $data['research-value'] = 'After that, we start by conducting a competitive benchmark to identify what aspects are needed in this Housing Management product and find out the pros and cons of existing similar products.';
        $data['wireframing-value'] = 'In this process, we create wireframes to visualize our ideas and also do a lot of discussion to gather initial design ideas and flow before going to the next stage of development.';
        $data['visual-design-value'] = 'Once the wireframing and flow is complete, we proceed to convert the approved frame design into a hi-fi design, and at the same time create a style guide.
        This style guide is very important to maintain the consistency of the design and can also be reused for further development.';
        $data['development-value'] = 'The final design implementation process that has been made into a line of code so that the design can be used by users later.';
        $data['test-deployment-value'] = 'The final design implementation process that has been made into a line of code so that the design can be used by users later.';

        $this->view('templates/header', $data);
        $this->view('workdetail/workdetail', $data);
    }
}
