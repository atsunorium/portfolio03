<!-- 本: 削除ボタン -->
<div class="flex justify-between p-4 items-center bg-green-500 text-white rounded-lg border-2 border-white">
  <div>{{ $slot }}</div>
  
  <div>
    <form action="{{ url('book/'.$id) }}" method="POST">
         @csrf
         @method('DELETE')
        
        <button type="submit"  class="btn bg-red-500 rounded-lg p-4">
            削除
        </button>
        
     </form>
  </div>

</div>