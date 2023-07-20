<?php

namespace App\Service;

use App\Models\Lead;

class LeadService
{
    public function persistLead(array $data)
    {
        $lead = new Lead;

        $lead->first_name = $data['first_name'];
        $lead->middle_name = $data['middle_name'];
        $lead->last_name = $data['last_name'];

        $lead->save();
    }

    public function findLead(string $id)
    {
        return Lead::find($id)->toJson();
    }

    public function updateLead(array $data, string $id)
    {
        $lead = Lead::find($id);

        $lead->first_name = $data['first_name'];
        $lead->middle_name = $data['middle_name'];
        $lead->last_name = $data['last_name'];

        $lead->save();
    }
}
