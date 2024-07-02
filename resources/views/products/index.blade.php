<form method="GET" action="{{ route('products.index') }}">
    <div>
        <label for="sortField">Sort By:</label>
        <select id="sortField" name="sortField">
            <option value="name">Name</option>
            <option value="price">Price</option>
        </select>
        <select id="sortOrder" name="sortOrder">
            <option value="asc">Ascending</option>
            <option value="desc">Descending</option>
        </select>
    </div>
    <div>
        <label for="category">Filter by Category:</label>
        <select id="category" name="category">
            <option value="">All</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Filter</button>
</form>
<ul>
    @foreach ($products as $product)
        <li>{{ $product->name }} - {{ $product->price }}</li>
    @endforeach
</ul>
{{ $products->links() }}
