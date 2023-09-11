@extends('layouts.admin.content')

@section('content')
    <div class="Show_ reply">

        <div class="Show_form member-permissions">
            <div class="text-block">
                <h3> 權 限 管 理 </h3>
                <a class="btn" href="{{ route('memberList') }}">返回會員</a>
            </div>
            <form method="get" action="{{ route('members.adminSetPermissions', $member) }}">

                <div class="series_filter">
                    <label for="series_filter">選擇系列：</label>
                    <select name="series_filter" id="series_filter">
                        <option value="" disabled>所有系列</option>
                        @foreach ($seriesList as $seriesItem)
                            <option value="{{ $seriesItem->id }}" @if ($selectedSeries == $seriesItem->id) selected @endif>
                                {{ $seriesItem->name }}
                            </option>
                        @endforeach
                    </select>
                    <button class="filter-btn" type="submit">篩選</button>
                </div>

            </form>
            <form action="{{ route('member.permissions.update', $member->id) }}" method="POST">
                @csrf
                <table>
                    <thead>
                        <tr>
                            <th> <input type="checkbox" id="select-all"></th>
                            <th>系列</th>
                            <th>編號</th>
                            <th>產品</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>
                                    <input class="checkbox" type="checkbox" name="products[]" value="{{ $product->id }}"
                                        @if (in_array($product->id, array_column($memberPermissions, 'id'))) checked @endif>
                                </td>
                                <td>

                                    <p>{{ optional($product->series)->name }}</p>

                                </td>
                                <td>
                                    <p>{{ $product->id }}</p>
                                </td>
                                <td>
                                    <p>{{ $product->title }}</p>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                        @endforeach

                        </tr>

                    </tbody>
                </table>

                <button id="permission-btn" type="submit">更新權限</button>
            </form>
            {{-- {{ $products->links() }} --}}
            {{ $products->render('components.pagination') }}

            {{-- <form action="{{ route('member.permissions.update', $member->id) }}" method="POST">
                        @csrf

                        <!-- 顯示所有產品的複選框 -->

                        <div class="checkSelect">
                            <label class="selectAll">
                                <input type="checkbox" id="select-all">
                                授權所有產品權限
                            </label>
                            <div class="baseline"></div>
                            <ul id="product-list">
                                @foreach ($products as $product)
                                    <li>
                                        <label>
                                            <input type="checkbox" name="products[]" value="{{ $product->id }}"
                                                @if (in_array($product->id, array_column($memberPermissions, 'id'))) checked @endif>

                                            {{ $product->title }}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>


                        <button type="submit">更新權限</button>
                    </form> --}}

            @stack('scripts')
        </div>

    </div>


    <script>
        $(document).ready(function() {
            // 監聽 "All" 選項的變更事件
            $('#select-all').change(function() {
                var isChecked = $(this).prop('checked');

                //設定所有產品選項的勾選狀態與 "All" 選項一致
                $('#product-list input[type="checkbox"]').prop('checked', isChecked);

            });
        })
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 选择所有复选框
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');

            // 检查本地存储中是否保存了选中状态
            checkboxes.forEach(function(checkbox) {
                const storageKey = `checkbox_${checkbox.value}`;
                const isChecked = localStorage.getItem(storageKey);

                if (isChecked === 'true') {
                    checkbox.checked = true;
                }

                // 监听复选框的变化事件
                checkbox.addEventListener('change', function() {
                    localStorage.setItem(storageKey, checkbox.checked);
                });
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const selectAllCheckbox = document.getElementById('select-all');
            const checkboxes = document.querySelectorAll('.checkbox');

            // 监听全选复选框的变化事件
            selectAllCheckbox.addEventListener('change', function() {
                checkboxes.forEach(function(checkbox) {
                    checkbox.checked = selectAllCheckbox.checked;
                });
            });
        });
    </script>
@endsection
