<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route('app.dashboard') }}" class="nav-link">
                    <i class="nav-icon icon-speedometer"></i> Dashboard
                </a>
            </li>

            <li class="nav-title">Resources</li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon icon-people"></i> Customers
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon icon-layers"></i> Vendors
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon icon-bag"></i> Products
                </a>
            </li>

            <li class="nav-title">Statistics</li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon icon-wallet"></i> Accounting
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon icon-pie-chart"></i> Reporting
                </a>
            </li>

            <li class="nav-title">More</li>

            <li class="nav-item">
                <a href="{{ route('app.users.index') }}" class="nav-link">
                    <i class="nav-icon icon-user-following"></i> Users
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('app.settings.index') }}" class="nav-link">
                    <i class="nav-icon icon-settings"></i> Settings
                </a>
            </li>

            <li class="nav-item nav-dropdown">
                <a href="#" class="nav-link nav-dropdown-toggle">
                    <i class="nav-icon icon-bulb"></i> More
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a href="{{ route('app.more.currencies') }}" class="nav-link">
                            <i class="nav-icon icon-arrow-right"></i> Currencies
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon icon-arrow-right"></i> Tax
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div>