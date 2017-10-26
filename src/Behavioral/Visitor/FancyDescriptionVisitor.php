<?php namespace Src\Behavioral\Visitor;

class FancyDescriptionVisitor extends Visitor
{
    private $description = null;
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($descriptionIn)
    {
        $this->description = $descriptionIn;
    }
    public function visitBook(BookVisitee $bookVisiteeIn)
    {
        $this->setDescription($bookVisiteeIn->getTitle().
            '...!*@*! written !*! by !@! '.$bookVisiteeIn->getAuthor());
    }
    public function visitSoftware(SoftwareVisitee $softwareVisiteeIn)
    {
        $this->setDescription($softwareVisiteeIn->getTitle().
            '...!!! made !*! by !@@! '.$softwareVisiteeIn->getSoftwareCompany().
            '...www website !**! at http://'.$softwareVisiteeIn->getSoftwareCompanyURL());
    }
}
