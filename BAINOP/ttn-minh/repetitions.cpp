#include <bits/stdc++.h>
#define lli long long int
using namespace std;

int main() {
	if (fopen("repetitions.inp", "r")) {
		freopen("repetitions.inp", "r", stdin);
		freopen("repetitions.out", "w", stdout);
	}
	
	string st; cin >> st;
	lli i = 0, res = 0;
	
	while (i < (st.size() - 1)) {
		lli dem = 0; lli j = i;
		if (st[i] == st[i + 1]) {
			while (st[j] == st[j + 1]) dem++, j++;
			i += dem;
		}
		res = max(res, dem); i++;
	}
	
	cout << res + 1 << endl;
}