<div class="col-xs-12 {{ \App\Helpers\LocaleHelper::getDirection() }}">
  <h3>
    🗣 {{ trans('people.document_list_title') }}

    <span class="relative {{ \App\Helpers\LocaleHelper::getDirection() == 'ltr' ? 'fr' : 'fl' }}" style="top: -7px;">
      <a href="{{ route('people.conversation.new', $contact) }}" class="btn edit-information">{{ trans('people.conversation_list_cta') }}</a>
    </span>
  </h3>
</div>

<div class="{{ \App\Helpers\LocaleHelper::getDirection() == 'ltr' ? 'fl' : 'fr' }} w-100 pb3 pt1 pl3 pr3">
  <div class="br2 bg-white mb4">
    <document-list hash="{{ $contact->hashID() }}"></document-list>
  </div>
</div>