<div class="grid grid-cols-5 gap-2">
    @foreach ($produk as $item)
        <span class="bg-text rounded p-4 hover:shadow-md" wire:key="{{ $item->id }}">
            <div class="text-center capitalize">{{ $item->nama }}</div>
            <img src="storage/{{ $item->url_img }}" alt="gambar" class="mx-auto my-1 w-52 h-52 rounded" />
            <div class="my-2 grid grid-cols-2 gap-1 justify-center bg-hover rounded p-1">
                <span class="text-center">Rp. {{ $item->harga }},00</span>
                <span class="text-center">Stok : {{ $item->stok }}</span>
            </div>
            <div class="text-justify break-all">
                Deskripsi : Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati
                optio eveniet ad, quod modi sed rerum numquam necessitatibus vero aliquid tempore, ipsum facere
                suscipit, est placeat voluptatum temporibus recusandae.
            </div>
        </span>
    @endforeach
</div>
