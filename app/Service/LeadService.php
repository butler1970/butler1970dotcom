<?php

namespace App\Service;

use App\Models\Lead;

class LeadService
{
    public function persistLead(array $data): Lead
    {
        $lead = new Lead;

        $lead->first_name = $data['first_name'];
        $lead->middle_name = $data['middle_name'];
        $lead->last_name = $data['last_name'];

        $lead->save();

        return $lead;
    }

    public function findLead(string $id): Lead
    {
        return Lead::find($id)->toJson();
    }

    public function updateLead(array $data, string $id): Lead
    {
        $lead = Lead::find($id);

        $lead->first_name = $data['first_name'];
        $lead->middle_name = $data['middle_name'];
        $lead->last_name = $data['last_name'];

        $lead->save();

        return $lead;
    }
}
