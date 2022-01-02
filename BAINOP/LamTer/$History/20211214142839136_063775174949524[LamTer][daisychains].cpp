#define TASK "daisychains"
#define INPFILE TASK".inp"
#define OUTFILE TASK".out"

#include <bits/stdc++.h>
using namespace std;

const int N = 107;

int num[N];

int main() {
	if (fopen(INPFILE, "r")) {
		freopen(INPFILE, "r", stdin);
		freopen(OUTFILE, "w", stdout);
	}

	ios_base::sync_with_stdio(0); cin.tie(0); cout.tie(0);

	int n; cin >> n;
	for (int i = 1; i <= n; i++) cin >> num[i];
	for (int i = 1; i <= n; i++) num[i] += num[i - 1];

    auto getAverage = [&] (int l, int r) -> int {
        assert(r >= l);
        int dis = r - l + 1;
        int cnt = num[r] - num[l - 1];
        if (cnt % dis) return 0;
        return cnt / dis;
    };

	auto check = [&] (int l, int r, int average) -> bool {
		assert(r >= l);
		for (int i = l; i <= r; i++) if (num[i] == average) return 1;
		return 0;
	};

	long long int ans = 0;
	for (int i = 1; i <= n; i++) {
		for (int j = i + 1; j <= n; j++) {
            int average = getAverage(i, j);
            if (!average) continue;
			ans += check(i, j, average);
		}
	}

	cout << ans + n;
}
