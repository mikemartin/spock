<?php

namespace Statamic\Addons\Spock;

use Statamic\Extend\Controller;
use Log;

class SpockController extends Controller
{

    /**
     * Run Spock Command
     * @return void
     */
    public function runCommand()
    {
        $addonName = $this->getAddonName();

        try {
            // Run the command

            // Log success returns
            Log::info('Spock command ran successfully');

            // Return back to dashboard with success message
            return back()->with('success', 'Spock command ran successfully');
        } catch (Exception $e) {
            Log::error('Spock command hit an exception');
            return back()->withErrors('error', ' Spock command exited unsuccessfully:' . $e);
        }
    }
}
