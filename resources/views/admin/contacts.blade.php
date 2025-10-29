<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact Messages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <div>
                            <h1 class="text-2xl font-medium text-gray-900">Contact Messages</h1>
                            <p class="mt-2 text-gray-600">Manage and respond to customer inquiries</p>
                        </div>
                        <div class="text-sm text-gray-500">
                            Total: {{ $contacts->total() }} messages
                        </div>
                    </div>
                </div>

                <div class="bg-white">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact Info</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subject</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($contacts as $contact)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <div class="h-10 w-10 rounded-full bg-gray-300 flex items-center justify-center">
                                                    <span class="text-sm font-medium text-gray-700">{{ substr($contact->name, 0, 1) }}</span>
                                                </div>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">{{ $contact->name }}</div>
                                                <div class="text-sm text-gray-500">{{ $contact->email }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">{{ $contact->subject }}</div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900 max-w-xs truncate">{{ $contact->message }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $contact->created_at->format('M d, Y') }}
                                        <div class="text-xs">{{ $contact->created_at->format('H:i') }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <button class="text-blue-600 hover:text-blue-900 mr-3" onclick="showMessage({{ $contact->id }}, '{{ addslashes($contact->name) }}', '{{ addslashes($contact->email) }}', '{{ addslashes($contact->subject) }}', '{{ addslashes($contact->message) }}')">
                                            View
                                        </button>
                                        <button class="text-red-600 hover:text-red-900" onclick="deleteMessage({{ $contact->id }})">
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                        No contact messages found.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                        {{ $contacts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Message Modal -->
    <div id="messageModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
        <div class="relative top-20 mx-auto p-5 border w-11/12 md:w-3/4 lg:w-1/2 shadow-lg rounded-md bg-white">
            <div class="mt-3">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-medium text-gray-900" id="modalTitle">Contact Message</h3>
                    <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">From:</label>
                        <p class="text-sm text-gray-900" id="modalName"></p>
                        <p class="text-sm text-gray-500" id="modalEmail"></p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Subject:</label>
                        <p class="text-sm text-gray-900" id="modalSubject"></p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Message:</label>
                        <p class="text-sm text-gray-900 whitespace-pre-wrap" id="modalMessage"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showMessage(id, name, email, subject, message) {
            document.getElementById('modalName').textContent = name;
            document.getElementById('modalEmail').textContent = email;
            document.getElementById('modalSubject').textContent = subject;
            document.getElementById('modalMessage').textContent = message;
            document.getElementById('messageModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('messageModal').classList.add('hidden');
        }

        function deleteMessage(id) {
            if (confirm('Are you sure you want to delete this message?')) {
                // Add delete functionality here
                alert('Delete functionality would be implemented here');
            }
        }

        // Close modal when clicking outside
        document.getElementById('messageModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    </script>
</x-app-layout>
