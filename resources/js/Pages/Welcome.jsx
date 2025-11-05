import {Head} from '@inertiajs/react';

export default function Welcome({conference}) {
    return (
        <>
            <Head title="Welcome"/>

            <div className="min-h-screen bg-gray-50 dark:bg-gray-900">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <div className="text-center">
                        <h1 className="text-4xl font-bold text-gray-900 dark:text-white mb-4">
                            Welcome to {conference?.name || 'JS TEK 2026'}
                        </h1>
                        <p className="text-xl text-gray-600 dark:text-gray-400 mb-8">
                            Built with React + Inertia.js + Laravel
                        </p>

                        {conference && (
                            <div
                                className="bg-yellow-50 dark:bg-yellow-900/20 border-2 border-yellow-400 rounded-lg shadow-lg p-6 max-w-2xl mx-auto">

                                <h2 className="text-2xl font-semibold text-gray-900 dark:text-white mb-4">
                                    Conference Details
                                </h2>
                                <div className="space-y-2 text-left">
                                    <p className="text-gray-700 dark:text-gray-300">
                                        <strong>Name:</strong> {conference.name}
                                    </p>
                                    <p className="text-gray-700 dark:text-gray-300">
                                        <strong>Venue:</strong> {conference.venue_name}
                                    </p>
                                    <p className="text-gray-700 dark:text-gray-300">
                                        <strong>Location:</strong> {conference.venue_city}, {conference.venue_state}
                                    </p>
                                    <p className="text-gray-700 dark:text-gray-300">
                                        <strong>Duration:</strong> {conference.duration_in_days} days
                                    </p>
                                </div>
                            </div>
                        )}
                    </div>
                </div>
            </div>
        </>
    );
}
