<?php

namespace App\Services;

class FAQDataService
{
    private $data = [];

    public function getData()
    {
        $this->prepareData();

        return $this->data;
    }

    private function prepareData()
    {
        $this->add1();
        $this->add2();
        $this->add3();
        $this->add4();
        $this->add5();
        $this->add6();
        $this->add7();
        $this->add8();
    }

    private function add1()
    {
        $this->data[] = [
            'title' => "Is RPL allowed for a PR visa in Australia?",
            'description' => "RPL is a skills’ assessment to be used for PR Visa within Australia. RPL helps to apply for PR Visa in Australia and thus people get opportunities to relocate to Australia. ICT Skill Assessment i.e., RPL report is one of the steps to submit a PR application in Australia examined by ACS. Therefore, it is required to file an RPL to apply for a PR Visa in Australia.",
        ];
    }

    private function add2()
    {
        $this->data[] = [
            'title' => "What is the best RPL agency in Australia?",
            'description' => "There are several agencies in Australia that provide RPL services for interested people. ITEC is one of the best agencies. It provides a free, no-obligation RPL skills check provided by an experienced ITEC representative. Also, ITEC has a partnership with the best RTO providers.",
        ];
    }

    private function add3()
    {
        $this->data[] = [
            'title' => "What is RPL for Australia?",
            'description' => "RPL signifies ‘Recognition of Prior Learning. In general, RPL helps to convert previous skills, knowledge, and learning of an experienced person. This process can be recognised as part of a new qualification.
                            <br>
                            RPL is also a good method to ensure that you do not waste time learning in areas where you are already skilled.",
        ];
    }

    private function add4()
    {
        $this->data[] = [
            'title' => "Which cities are popular for an RPL course in Australia?",
            'description' => "Recognising your talents by an RPL test can assist you in achieving the career you have always wanted. In Australia, RPL is popular and has huge value. Cities like Tasmania, NSW, Sydney are popular among experienced people to pursue RPL.",
        ];
    }

    private function add5()
    {
        $this->data[] = [
            'title' => "Can you be a chef without a degree in Australia?",
            'description' => "Your answer is yes. You can become an experienced chef without studying; however, you must have working experience, a valid RPL certificate, and then assess skills by a chef.",
        ];
    }

    private function add6()
    {
        $this->data[] = [
            'title' => "What is recognition of prior learning in Australia?",
            'description' => "Recognition of Prior Learning is also popularly known as RPL in short. In general, it helps to convert previous skills, knowledge, and learning of an experienced person. This process can be recognised as part of a new qualification.
                            <br />
                            Recognition of Prior Learning is also a good method to ensure that you do not waste time learning in areas where you already are skilled.",
        ];
    }

    private function add7()
    {
        $this->data[] = [
            'title' => "Why do you need RPL Report for Australian Immigration?",
            'description' => "RPL is a term used to describe the term \"Recognition of Prior Learning\" which is an official report submitted to the Australian Computer Society (ACS) by people who wish to migrate to Australia to begin their ICT related jobs, but do not possess an ICT certification or comes from other IT background.
                            <br />
                            Therefore, if you don't have any degree that is related to the field of ICT related profession or field, an RPL is mandatory.
                            <br />
                            As you can see, there are a lot of people who wish to move to Australia. This is why some proof is needed prior to submitting an apply to become an immigrant. We need skilled migrants, and RPL is one of the ways to demonstrate this."
        ];
    }

    private function add8()
    {
        $this->data[] = [
            'title' => "What is RPL Report and Why it is required?",
            'description' => "Recognisance of Prior Learning (RPL) is a document that needs to be submitted for submission to the Australian Computer Society (ACS). If you're planning to relocate to Australia and would like to continue with your career path in ICT related fields, however, you don't have an academic qualification in ICT qualifications or have a non-related background.",
        ];
    }
}
