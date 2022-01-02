#include <bits/stdc++.h>
#define lli long long int
using namespace std;

lli n;
float a[2*(lli)1e5];

bool fdaisy(lli l, lli b, float k) {
    if (l == b) return true;
    for (lli i = l + 1; i < b; i++) {
        if (a[i] == k) return true;
    }
    return false;
}

int main() {
    if (fopen("daisychains.inp", "r")) {
        freopen("daisychains.inp", "r", stdin);
        freopen("daisychains.out", "w", stdout);
    }

    cin >> n;

    for (lli i = 1; i <= n; i++) cin >> a[i];

    lli dem = 0;

    for (lli i = 1; i <= n; i++) {
        for (lli j = i; j <= n; j++) {
            if (fdaisy(i, j, (a[i] + a[j])/2)) {
                dem++;
                //cout << "(" << i << "," << j << ")";
            }
        }
    }

    cout << dem << endl;
}
